<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#16181D] text-gray-500 bg-image">
<script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
    <?php include('./componentes/section-primary.php') ?>
    <?php include('./componentes/section-projects.php') ?>
    <?php include('./componentes/section-me.php') ?>


    <footer class="mx-auto max-w-screen-lg min-h-20">

        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm text-center">

            © Copyright <?= date('Y') ?>. Construído ❤️ por mim mesmo :) .

        </div>

    </footer>

</body>

</html>