<?php
if (sessions_status() == PHP_SESSION_NONE) session_start();

function _mock_users() {
  return [
    [
      'id' => 1,
      'name' => 'Admin',
      'email' => 'admin@rfg.local',
      // senha em texto simples só para mock: 123456
      'password' => '123456',
      'role' => 'admin'
    ],
    [
      'id' => 2,
      'name' => 'Editor',
      'email' => 'editor@rfg.local',
      'password' => 'editor',
      'role' => 'editor'
    ]
  ];
}

function auth_login(string $email, string $password): bool {
  foreach (_mock_users() as $u) {
    if (strcasecmp($u['email'], $email) === 0 && $u['password'] === $password) {
      $_SESSION['user'] = [
        'id' => $u['id'],
        'name' => $u['name'],
        'email' => $u['email'],
        'role' => $u['role']
      ];
      return true;
    }
  }
  return false;
}
function auth_user() {
  return $_SESSION['user'] ?? null;
}

function auth_check(): bool {
  return isset($_SESSION['user']);
}

function auth_require_login(): void {
  if (!auth_check()) {
    header('Location: /admin-login/login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
    exit;
  }
}

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

/** helper simples para flash messages */
function set_flash(string $key, string $msg) { $_SESSION['flash'][$key] = $msg; }
function get_flash(string $key): ?string {
  if (!isset($_SESSION['flash'][$key])) return null;
  $msg = $_SESSION['flash'][$key];
  unset($_SESSION['flash'][$key]);
  return $msg;
}
?>