# 商品一覧(products.php)

- お客さんが商品の一覧を確認する画面

## こんな感じのページする予定

<img src="image-3.png" width="500px" alt="topページ見本">

## このサイトは bootstrap で作成しています

ひな形

```html
<!DOCTYPE html>
<html>
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
        <!-- nav -->
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a href="#" class="navbar-brand">ロゴ画像とタイトル文字列</a>
            <button
              type="button"
              class="navbar-toggler"
              data-bs-toggle="collapse"
              data-bs-target="#Navbar"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
              <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">ホーム</a></li>
                <li class="nav-item"><a href="#" class="nav-link">商品一覧</a></li>
                <li class="nav-item"><a href="#" class="nav-link">注文</a></li>
                <li class="nav-item"><a href="#" class="nav-link">注文一覧</a></li>
                <li class="nav-item"><a href="#" class="nav-link">商品管理</a></li>
              </ul>
            </div>
          </div>
        </nav>
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
```

## それでは作成しましょう

- 説明しながら作りますので、一緒に作業してください
- タイピングに集中せず、理解を優先して欲しいです

## 商品を検討する

- `商品コード、商品名、商品の説明、価格、画像ファイル名`を検討する
- 必要な画像ファイルを集め、images フォルダに保存する

## DB にデータを入れる

- PHPMYADMIN から以下の SQL を参考に、自分のデータベースに欲しい商品を登録する

```SQL
// 商品コード:pcode  商品名:pname  商品概要:pprice  商品の写真のファイル名:pfilename
insert into products values('0001','ポップコーン塩','おいしい定番の味','300','pop_sio.jpg');
```

- 以下の SQL で確認

```SQL
select * from products;
```

## DB ユーザの作成と権限の付与

## DB に接続する部分を作成

## DB に SQL を発行する部分を作成

## 取得したレコードを元に商品一覧を表示する

## 商品一覧をテーブルで表示できるように修正する

## ナビゲーションバーの作成
