<?
include('session.php');
include('db.php');
include('utils.php');

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['email'])) array_push($errors, 'email is empty');
  if (empty($_POST['password'])) array_push($errors, 'password is empty');

  if (count($errors) == 0) {
    $stmt = $db->prepare("select * from users where email = :email and password = :password");
    $stmt->bindParam(':email', $_POST['email']);
    $tmp = pass_hash($_POST['password']);
    $stmt->bindParam(':password', $tmp);
    $stmt->execute();
    $user = $stmt->fetch();
    if (empty($user)) {
      array_push($errors, 'wrong email or password');
    } else {
      $_SESSION['user'] = $user;
      header("Location: /index.php");
      exit();
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

  <title>Signin - ER</title>
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

  <main class="form-signin">
    <form method="POST">
      <img src="styles/images/ProductLogo.png" alt="mdo" width="100" height="100" class="rounded  center">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <a href="signup.php">need to signup?</a>
          <br>
          <a href="index.php">back to homepage</a>
        </label>
      </div>

      <div class="error"><?= join('<br>', $errors) ?></div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </main>




</body>

</html>
