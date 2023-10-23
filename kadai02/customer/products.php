<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>商品一覧</title>
    <!-- Bootstrap CSSの読み込み -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="containercontainer bg-warning-subtle border border-3 border-primary">
      <div class="row border border-3 border-secondary">
        <!-- navbar -->
        <?php readfile('./../navbar.html') ?>
      </div>
      <div class="row border border-3 border-secondary">
        <!-- header -->
        <div class="col-12">
          <h1>タイトル</h1>
        </div>
      </div>
      <div class="row border border-3 border-secondary">
        <!-- products list -->
        <!-- 主にここを作っていくぞ -->
      </div>

      <div class="row">
        <div class="col-12">(c)We are Unknown Fried Pan!!</div>
      </div>
    </div>
    <!-- Bootstrap JavaScriptの読み込み -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>