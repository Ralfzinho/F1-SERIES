<?php
// inicia sessão só se ainda não estiver ativa
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

/**
 * Usuários mockados (sem banco).
 * NUNCA use em produção com senha em texto puro.
 */
function _mock_users(): array {
  return [
    [
      'id' => 1,
      'name' => 'Admin',
      'email' => 'admin@rfg.local',
      'password' => '123456', // mock
      'role' => 'admin',
    ],
    [
      'id' => 2,
      'name' => 'Editor',
      'email' => 'editor@rfg.local',
      'password' => 'editor', // mock
      'role' => 'editor',
    ],
  ];
}

/**
 * Autentica e grava sessão.
 */
function auth_login(string $email, string $password): bool {
  foreach (_mock_users() as $u) {
    if (strcasecmp($u['email'], $email) === 0 && $u['password'] === $password) {
      $_SESSION['user'] = [
        'id'    => (int)$u['id'],
        'name'  => $u['name'],
        'email' => $u['email'],
        'role'  => $u['role'],
      ];
      return true;
    }
  }
  return false;
}

/** Usuário atual (ou null) */
function auth_user(): ?array {
  return $_SESSION['user'] ?? null;
}

/** Está logado? */
function auth_check(): bool {
  return isset($_SESSION['user']);
}

/** Papel atual (admin/editor/...) */
function auth_role(): ?string {
  return $_SESSION['user']['role'] ?? null;
}

/** Checagem simples de papel */
function auth_is(string $role): bool {
  return auth_role() === $role;
}

/**
 * Exigir login (redireciona para login com redirect back)
 */
function auth_require_login(): void {
  if (!auth_check()) {
    $redirect = urlencode($_SERVER['REQUEST_URI'] ?? '/');
    header('Location: /admin-login/login.php?redirect=' . $redirect);
    exit;
  }
}

/**
 * Exigir um dos papéis (ex.: ['admin','editor'])
 */
function auth_require_role(array $roles): void {
  auth_require_login();
  if (!in_array(auth_role(), $roles, true)) {
    // sem permissão → manda para uma página de erro simples
    header('Location: /admin-login/sem_permissao.php');
    exit;
  }
}

/** Logout + redirect */
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

/** Flash messages simples */
function set_flash(string $key, string $msg): void { $_SESSION['flash'][$key] = $msg; }
function get_flash(string $key): ?string {
  if (!isset($_SESSION['flash'][$key])) return null;
  $msg = $_SESSION['flash'][$key];
  unset($_SESSION['flash'][$key]);
  return $msg;
}
