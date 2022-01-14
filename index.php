<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&family=Noto+Sans+JP:wght@500&display=swap"
      rel="stylesheet">
    <style>
      * {
        font-family: 'Inconsolata', 'Noto Sans JP', monospace;
      }
    </style>
    <title>TeensTownむさしの (旧URL)</title>
  </head>
  <body class="font-mono">
    <main class="m-auto max-w-full p-4" style="width: 600px;">
      <h1 class="my-10">
        <a class="block w-2/3 m-auto transition-all duration-75 hover:opacity-70" target="_blank" rel="noopener"
          href="http://teens-town.main.jp">
          <img class="block w-full" src="/assets/img/logo@4x.png" alt="Teens Town むさしの">
        </a>
      </h1>
      <p class="text-center my-5">現在は teens-town.main.jp で活動発信中です。</p>
      <div class="text-center">
        <a target="_blank" rel="noopener" href="http://teens-town.main.jp"
          class="inline-block border border-blue-700 w-72 px-8 py-5 bg-white text-blue-700 shadow-md transition-all duration-75 hover:bg-blue-700 hover:text-white">
          ❯ 現在のサイトへ移動する
          <br>
          <span class="text-sm">http://teens-town.main.jp</span>
        </a>
      </div>
    </main>
    <footer class="w-2/3 mx-auto mt-5 border-t py-4">
      <p class="text-center text-sm text-gray-400">This domain (<?= $_SERVER['HTTP_HOST']; ?>) and page are
        owned by <a class="underline" target="_blank" rel="noopener" href="https://up-tri.me">up-tri</a>.</p>
    </footer>
  </body>
</html>