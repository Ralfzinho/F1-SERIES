<?php if (session_status() == PHP_SESSION_NONE) session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>RACE FOR GLORY</title>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { dark: '#0b0b0c', primary: '#ef4444' }
          }
        }
      }
    </script>

    <!-- Seu CSS opcional -->
    <link href="../F1-SERIES/assets/css/main.css" rel="stylesheet">
  </head>
  <body class="bg-neutral-50 text-neutral-900">
    