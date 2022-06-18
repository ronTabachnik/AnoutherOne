<?
include('session.php');
?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>About us - ER</title>
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
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Recycling And Repurposing of Used Electronics </h1>
        <!-- <p class="lead fw-normal"></p> -->
        <!-- <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden mx-auto">
        <div class="my-3 py-3">
          <!-- <h2 class="display-5"></h2> -->
          <p class="lead">Outdated technology doesn’t have to end up in a landfill. So when it’s time to upgrade your laptops and printers or replace your ink and toner</p>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden " style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <p class="lead">Visit our website to find the right place to recycle it responsibly. This platform is a non-profit organization that is aimed at reducing electronic waste. Our mission is to educate while making an impact.</p>
        </div>
      </div>
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5"></h2>
          <p class="lead">Around 40 million metric tons of e-waste are disposed of worldwide every year. Many of these electronics work fine but they are either outdated or not trending. As the saying goes “one man’s trash is another man’s treasure”.
          </p>
        </div>
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <p class="lead">Our website connects owners of this unusable/broken electronic items to recycling store and individuals.</p>
        </div>
      </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Why recycle electronics?</h2>
          <p>Electronic products are made from valuable resources and materials, including metals, plastics, and glass, all of which require energy to mine and manufacture. Recycling consumer electronics conserves our natural resources and avoids air
            and water pollution, as well as greenhouse gas emissions that are caused by manufacturing virgin materials.</p>
          <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Do you know?</h2>
          <ul>
            <li>Recycling one million laptops saves the energy equivalent to the electricity used by more than 3,500 US homes in a year.</li>
            <li>For every million cell phones we recycle, 35 thousand pounds of copper, 772 pounds of silver, 75 pounds of gold and 33 pounds of palladium can be recovered.</li>
          </ul>
          <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
        </div>
      </div>
    </div>
    </div>
  </main>

  
  <? include("nav_footer.php") ?>


</body>

</html>
