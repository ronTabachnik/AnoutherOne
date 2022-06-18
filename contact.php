<?
include('session.php');
?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>Contact us - ER</title>
  <link rel="icon" type="image/x-icon" href="styles/images/ProductLogo.ico">
  <link rel="icon" href="styles/images/ProductLogo.png">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <link href="styles/base.css" rel="stylesheet">
  <!-- <link href="styles/nav.css" rel="stylesheet"> -->
  <link href="styles/sign.css" rel="stylesheet">
  <!-- <link href="styles/product.css" rel="stylesheet"> -->
</head>

<body class="text-center">
<? include('nav_header.php'); ?>

  <main class="form-signin">
    <form action="index.php">
      <img src="styles/images/ProductLogo.png" alt="mdo" width="100" height="100" class="rounded  center">
      <h1 class="h3 mb-3 fw-normal">Contact us</h1>

      <div class="form-floating">
        <input autofocus required type="text" class="form-control" id="floatingInput" placeholder="varde">
        <label for="floatingInput">Name</label>
      </div>
      <br>
      <div class="form-floating">
        <input required type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <br>
      <div class="form-floating">
        <textarea required class="form-control" id="floatingInput" placeholder="Message" rows="4" cols="50"></textarea>
        <label for="floatingInput">Message</label>
      </div>
      <br>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Send message</button>
      <br>
      <a href="index.php">back to homepage</a>

      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </main>

  <? include("nav_footer.php") ?>

</body>

</html>
