<?
include('session.php');
include('db.php');

$filter = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['filter'])) {
  $stmt = $db->prepare("select * from announcements where name like :filter or description like :filter order by name");
  $filter = $_POST['filter'];
  $param = '%'.$filter.'%';
  $stmt->bindParam(':filter', $param);
} else {
  $stmt = $db->prepare("select * from announcements order by name");
}
$stmt->execute();
$items = $stmt->fetchAll();

?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>Market - ER</title>
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
  <link href="styles/nav.css" rel="stylesheet">
  <!-- <link href="styles/sign.css" rel="stylesheet"> -->
  <link href="styles/product.css" rel="stylesheet">
</head>

<body>
<? include('nav_header.php'); ?>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Market</h1>
          <!-- <p class="lead text-muted">soon we going to have here a great market of 2nd hand electronics items, but until then you should wait while we're finishing to set up the server).</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p> -->
        </div>
      </div>
    </section>

    <form method="POST">
      Search: <input type="text" name="filter" value="<?= $filter ?>"> <button type="submit">Search</button>
      <? if ($filter) { ?>
      <a href="market.php">clear</a>
      <? } ?>
    </form>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<? foreach ($items as $item) { ?>
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= $item['image']?>">
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title><?= $item['name'] ?></title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg> -->

              <div class="card-body">
                <p class="card-text"><b><?= $item['name'] ?></b></p>
                
                <p class="card-text">contact info: <?= $item['contact'] ?></p>
                <p class="card-text"><?= $item['description'] ?></p>
              </div>
            </div>
          </div>
<? } ?>
        </div>
      </div>
    </div>

  </main>


  <? include("nav_footer.php") ?>

</body>

</html>
