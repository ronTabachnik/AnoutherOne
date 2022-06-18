<?
include('session.php');
include('db.php');
include('utils.php');

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['email'])) array_push($errors, 'email is empty');
  if (empty($_POST['name'])) array_push($errors, 'name is empty');
  if (empty($_POST['password'])) array_push($errors, 'password is empty');

  if (count($errors) == 0) {
    $stmt = $db->prepare("select * from users where email = :email");
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->execute();
    $user = $stmt->fetch();
    if (empty($user)) {
      $stmt = $db->prepare("insert into users (email, name, password) values (:email, :name, :password)");
      $stmt->bindParam(':email', $_POST['email']);
      $stmt->bindParam(':name', $_POST['name']);
      $stmt->bindParam(':password', pass_hash($_POST['password']));
      $stmt->execute();
      $stmt = $db->prepare("select * from users where email = :email");
      $stmt->bindParam(':email', $_POST['email']);
      $stmt->execute();
      $user = $stmt->fetch();
      $_SESSION['user'] = $user;
      header("Location: /index.php");
      exit();
    } else {
      array_push($errors, 'login already exists');
    }
  }
}

?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>Signup - ER</title>
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
    <form method="POST">
      <img src="styles/images/ProductLogo.png" alt="mdo" width="100" height="100" class="rounded  center">
      <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="name" type="text" class="form-control" id="floatingName">
        <label for="floatingName">Name</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <a href="signin.php">need to signin?</a>
          <br>
          <a href="index.php">back to homepage</a>
        </label>
      </div>

      <div class="error"><?= join('<br>', $errors) ?></div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </main>

  <? //include("nav_footer.php") ?>

</body>

</html>
