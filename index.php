<?
include('session.php');
include('db.php');
?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>Homepage - ER</title>
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
<div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
			</ul>
			</div>
<body>
<? include('nav_header.php'); ?>


  <main class="container-md">
    <div class="p-5  p-md-6 mb-4 text-black border rounded-3 bg-light">
      <div class="col-md-12 px-0">
        <h1 class="display-4 "><center>About our goal</center></h1>
        <p style="font-size: 22px" align="justify" class="lead my-4"><center>Outdated technology doesn’t have to end up in a landfill. So when it’s time to upgrade your laptops and printers or replace your old tv
          Visit our website to find the right place to recycle it responsibly...</center></p>
        <p class="lead mb-0"><a href="recycling.php#importance" class="text-black fw-bold"><center>Read more...</center></a></p>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Recycling company</strong>
            <h3 class="mb-0">The goal</h3>
            <p align="justify" class="card-text mb-auto">Electronic waste is the waste generated from surplus, broken, and obsolete electronic devices that have no further ability to be reused or repurposed..</p>
            <a href="recycling.php#recycling_companies" class="stretched-link">Read more...</a>
			<br>
          <div class="col-auto  d-none d-lg-block">
            <img width="550px" height="350px" src="https://cdn.pixabay.com/photo/2021/11/27/11/55/business-6827797_1280.png" alt="">
          </div>
		  </div>
          

        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
          
          <strong class="d-inline-block mb-2 text-success">Electronic waste disposal</strong>
            <h3 class="mb-0">What is E-waste</h3>
            <p align="justify" class="mb-auto">When the word “recycling” gets mentioned, people often think of soda cans, water bottles, cardboard boxes, or newspapers – common household items..</p>
            <a href="recycling.php#ewaste" class="stretched-link">Read more..</a>
          </div>
		  <div class="col-auto d-none d-lg-block">
          <img width="550px" height="350px" src="styles/images/Ewaste.png" alt="">
          </div>

        </div>
      </div>
    </div>
    <div class="b-example-divider"></div>
    <div class="row g-5">

      <div class="col-md-8">

       <br>

        <article class="blog-post">
		  <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Benefits of electronics recycling</h2>
          <br>
          <dl>
            <dt><h5><b>Cleaner Environment</h5></b></dt>
            <dd><p align="justify">Recycling the waste from electronics saves space in the landfills and prevents the environmental pollution caused by the toxins. Recycling also reduces the need for landfills in the first place.</p></dd>
            <dt><h5><b>Recycling is good for the economy</h5></b></dt>
            <dd><p align="justify">Goods made from recycled materials use less water, create less pollution, and uses less energy. Recycling also reduces the production costs of goods by avoiding manufacturing components from scratch.</p></dd>
            <dt><h5><b>Reuse of resources</h5></b></dt>
            <dd><p align="justify">Electronics contain a lot of components that can be re-utilized sometimes without any processing, saving resources and energy required for initial manufacturing.</p> <p align="justify">A lot of big companies like Apple have their own recycling facility
              where they dispose of electronics for future reuse and this is something that all big companies should strive for.</p></dd>
          </dl>
		  </div>
<br>
        <div class="h-100 p-5 bg-light border rounded-3">
          <h3>How to avoid online shopping scam</h3>
          <br>
          <dl>
            <dt><h5><b>Too good to be true rule</b></h3></dt>
            <dd><p align="justify">If you’re shopping online and find that one specific item for a price that seems too good to be true, chances are it’s scam. Online scammers pick popular items and list them at discount prices to lure in customers.</p><p align="justify"> A customer thinks
              they’re getting a deal, when really they are providing someone with their payment information. Always check the website URL for misspellings and look for secure checkouts when finalizing your purchase.</p></dd>
            <dt><h5><b>Research new and sketchy websites</h5></b></dt>
            <dd><p align="justify">Let’s say you find that perfect gift online but it’s on a website in which you’ve never purchased anything. It’s always best to research the website before making a final purchase.</p><p align="justify"> Today’s scammers create mock websites that are almost
              identical to online retailer websites, all with the intent to confuse you and steal your information. Always check the website URL to make sure it’s not misspelled. Also, a good rule of thumb is to do a quick online search.</p> <p align="justify"> If other
              customers have fallen for online traps, then chances are likely someone wrote a review online about their experience. A little research could potentially save you money and heartache.</p></dd>
            <dt><h5><b>Don't use the same password for every account</h5></b></dt>
            <dd><p align="justify">It’s always said, but it needs to be said again – do not use the same password for every online account. Once an online scammer figures out one password, then it’s easy for them to turn around and try it on all of your accounts.</p><p align="justify"> If
              you had one password for every account then you just gave the scammer free access to all of your information. Using different passwords prevents you from falling victim to these practices.</p><p align="justify"> Also, don’t worry if you have a hard time
              remembering all of your passwords. Most retailers now have that capability to instantly verify your identity so you can quickly reset your password each time you sign in.</p></dd>
          </dl>
        </div>
             </article>
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
		<br>
		<div class="card">
  <center><div class="card-header">
     Fact about E-waste
  </div>
  <div class="card-body">
      <p align="justify">E-waste represents 2% of America's trash in landfills, but it equals 70% of overall toxic waste.</p>
  </div>
</div></center>
		
     

          <div class="p-4">
            <h4 class="">Reach us</h4>
            <ol class="list-unstyled">
            <li><a href="https://github.com/ronTabachnik/AnoutherOne">GitHub</a></li>
            <!-- <li><a href="#">KTU</a></li> -->
            <!-- <li><a href="#">Facebook</a></li> -->
            </ol>
          </div>
        </div>
      </div>
    </div>
  </main>
  <br>
  <br>

<? include("nav_footer.php") ?>


</body>

</html>
