<?php
// Inclui a conexão com o banco de dados
include('../includes/db.php');

/**
 * Função para autenticar usuário com banco de dados
 */
function auth_login(string $email, string $password): bool {
    global $pdo; // Acessa a variável $pdo que contém a conexão com o banco

    // Consulta SQL para buscar o usuário pelo email
    $sql = "SELECT id, name, email, password, role FROM usuarios WHERE email = :email LIMIT 1";
    
    // Preparando e executando a consulta
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch();

    // Verifica se o usuário existe e se a senha fornecida confere
    if ($user && password_verify($password, $user['password'])) {
        // Grava as informações do usuário na sessão
        $_SESSION['user'] = [
            'id'    => (int)$user['id'],
            'name'  => $user['name'],
            'email' => $user['email'],
            'role'  => $user['role'],
        ];
        return true;
    }

    // Caso não encontre o usuário ou a senha esteja errada
    return false;
}

/**
 * Função para obter o usuário atual
 */
function auth_user(): ?array {
    return $_SESSION['user'] ?? null;
}

/**
 * Função para verificar se o usuário está logado
 */
function auth_check(): bool {
    return isset($_SESSION['user']);
}

/**
 * Função para pegar o papel (role) do usuário
 */
function auth_role(): ?string {
    return $_SESSION['user']['role'] ?? null;
}

/**
 * Função para checar se o usuário tem o papel especificado
 */
function auth_is(string $role): bool {
    return auth_role() === $role;
}

/**
 * Função para exigir login (redireciona se não estiver logado)
 */
function auth_require_login(): void {
    if (!auth_check()) {
        $redirect = urlencode($_SERVER['REQUEST_URI'] ?? '/');
        header('Location: /admin-login/login.php?redirect=' . $redirect);
        exit;
    }
}

/**
 * Função para exigir um dos papéis do usuário
 */
function auth_require_role(array $roles): void {
    auth_require_login();
    if (!in_array(auth_role(), $roles, true)) {
        // Sem permissão → redireciona para uma página de erro simples
        header('Location: /admin-login/sem_permissao.php');
        exit;
    }
}

/**
 * Função para fazer logout e redirecionar
 */
function auth_logout(): void {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
    session_destroy();
    header('Location: /admin-login/login.php?bye=1');
    exit;
}

/**
 * Função para salvar mensagens temporárias (flash messages)
 */
function set_flash(string $key, string $msg): void { 
    $_SESSION['flash'][$key] = $msg; 
}

function get_flash(string $key): ?string {
    if (!isset($_SESSION['flash'][$key])) return null;
    $msg = $_SESSION['flash'][$key];
    unset($_SESSION['flash'][$key]);
    return $msg;
}
