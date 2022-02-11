<!doctype html>
<html lang="en" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Uplaod - آپلود</title>

    

    

    <!-- Bootstrap core CSS -->

<link href="/css/bootstrap-rtl.min.css" rel="stylesheet">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

  </head>
  <body class="text-center">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">آپلود</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="/">خانه</a>
        <a class="nav-link" href="/signin">ورود </a>
        <a class="nav-link" href="/signup">ثبت نام</a>
        <a class="nav-link" href="/user">فایل های من</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">آپلود فایل</h1>
    <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>

    <?php foreach ($errors as $error): ?>
    <div class="alert alert-warning">
    <li><?= esc($error) ?></li>
    </div>
    <?php endforeach ?>

    <div class="d-flex justify-content-center">
      <?= form_open_multipart('upload',['class'=>'form-inline']) ?>
      <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="file" name="userfile" class="form-control" id="exampleFormControlFile1">
      </div>
      <button type="submit" class="btn btn-primary mb-2">آپلود</button>
      </form>
    </div>
    
</main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>طراحی و برنامه نویسی از <a href="https://www.ahady.ir/">ahady.ir</a></p>
    </div>
  </footer>
</div>


<script src="/js/jquery-3.5.1.slim.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>   

  </body>
</html>
