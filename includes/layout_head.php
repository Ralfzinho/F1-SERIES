<?php if (session_status() == PHP_SESSION_NONE) session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Racing for Glory' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#ef4444', // vermelho esportivo
              dark: '#0b0b0c'
            }
          }
        }
      }
    </script>
  </head>
  <body class="bg-neutral-50 text-neutral-900">
    