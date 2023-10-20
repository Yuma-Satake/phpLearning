<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <!-- googleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- meta -->
    <title>タイトル</title>
  </head>
  <body style="font-family: Noto Sans JP, sans-serif">
    <!-- navbar -->
      <?php readfile('./navbar.html') ?>
    <!-- header -->
    <section class="border-top border-bottom" style="padding: 15px">
      <h2>タイトル</h2>
      <h6>サブタイトルサブタイトルサブタイトルサブタイトル</h6>
    </section>
    <!-- img Grid -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="./images/popcorn.jpeg" alt="ポップコーン" class="img-fluid" />
          </div>
          <div class="col-6">
            <img src="./images/popcorn.jpeg" alt="ポップコーン" class="img-fluid" />
          </div>
          <div class="col-6">
            <img src="./images/popcorn.jpeg" alt="ポップコーン" class="img-fluid" />
          </div>
          <div class="col-6">
            <img src="./images/popcorn.jpeg" alt="ポップコーン" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- Bootstrap5 -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
