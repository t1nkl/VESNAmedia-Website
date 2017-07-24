<html>
  <head>
    <title>{{ config('backpack.base.project_name') }} - Ошибка 404</title>
    <link rel="shortcut icon" href="/img/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=cyrillic" rel="stylesheet">
    <style>
      body {
        padding: 0;
        margin: 0;
        font-weight: lighter;
        font-size: 14px;
      }
      .container {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        width: 100%;
        justify-content: center;
      }
      .navigation-block, .main-content {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;
        align-self: center;
        width: 60%;
        margin-bottom: 100px;
      }
      .navigation-logo {
        margin: 40px 0;
      }
      .content-notfound-block, .content-notfound-illustration {
        width: 50%;
        display: flex;
        flex-wrap: wrap;
      }
      .content-notfound-illustration {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
      }
      .fullsize-illusration {
        display: flex;
        flex-wrap: wrap;
        align-self: flex-end;
        max-width: 100%;
      }
      .navigation-menu-link,
      .content-notfound-heading {
        font-family: "Playfair Display", serif;
      }
      .navigation-menu-link {
        font-size: 20px;
        color:#3A3A3A;
      }
      .content-notfound-heading {
        font-size: 80px;
        color: #3A3A3A;
        font-weight: normal;
        width: 100%;
        margin:0;
      }
      .navigation-menu-link {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        flex-direction: column;
        text-decoration: none;
        margin-left: 40px;
      }
      .navigation-menu {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        flex-direction: row;
      }
      .content-notfound-subheading {
        font-size: 48px;
        color:#676767;
        width: 100%;
        display: flex;
        margin: 0;
        font-family: Helvetica, sans-serif;
        font-weight: lighter;
      }
      .content-notfound-text {
        color:#676767;
        font-size: 20px;
        width: 100%;
        display: flex;
        margin: 0;
        font-family: Helvetica, sans-serif;
        font-weight: lighter;
      }
      .content-notfound-block > a {
        font-size: 22px;
        color:#3A3A3A;
        font-weight: bold;
        width: 100%;
        display: flex;
        margin: 0;
        font-family: Helvetica, sans-serif;
        text-decoration:none;
      }
      .content-notfound-block > a > img{
        height: 22px;
        margin-right:20px;
      }
      @media screen and (max-width:1110px) {
        .navigation-block, .main-content {
            flex-direction: column;
            width: 80%;
        }
        .content-notfound-illustration {
            justify-content: center;
            margin: 50px 0;
        }
        .content-notfound-block, .content-notfound-illustration {
          width: 100%;
        }
        .content-notfound-heading, .content-notfound-subheading, .content-notfound-text {
          display: flex;
          justify-content: center;
          margin-bottom: 20px;
        }
        .content-notfound-block > a {
          display: flex;
          justify-content: center;
        }
      }

    </style>
  </head>
  <body>
    <div class="container">
      <header class="navigation-block">
        <a href="/"><img src="/img/logo.svg" alt="Logo" class="navigation-logo"></a>
        <div class="navigation-menu">
          <a href="/" class="navigation-menu-link">Главная</a>
          <a href="/" class="navigation-menu-link">Журнал</a>
          <a href="/" class="navigation-menu-link">Контакты</a>
        </div>
      </header>
      <main class="main-content">
        <div class="content-notfound-block">
          <h4 class="content-notfound-heading">404</h4>
          <h6 class="content-notfound-subheading">Что-то не так</h6>
          <p class="content-notfound-text">Помните те старые страницы 404 из 90-х, которые говорили что-то вроде «Что-то пошло не так, но не волнуйтесь, наши веб-мастера были уведомлены».</p>
          <?php
            $default_error_message = '<a href="'.url("").'"><img src="/img/arrow-left.svg"> На главную</a>';
          ?>
          {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
        </div>
        <div class="content-notfound-illustration">
          <img src="/img/404.png" class="fullsize-illusration" alt="">
        </div>
      </main>
    </div>
  </body>
</html>
