<?
include('session.php');
?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>Recycling - ER</title>
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
    <div class="container px-4 py-5" id="custom-cards">
	<a id="recycling_companies"></a>
      <h2 class="pb-2 border-bottom"><center>Recycling companies</center></h2>
		<div class="h-100 p-2 bg-light text-dark border rounded-3">
		<p align="justify">Companies are in various stages of their e-waste management journey—whether due to recent recognition of potential e-waste in new products or improving programs for existing products. A company sits in the electronics product lifecycle, the first steps are to identify material risks presented by e-waste, assess the actions already taken, and map out a strategy for moving forward.</p>
		</div>
		<br>
		
		<div class="h-100 p-2 bg-light text-dark border rounded-3">
		<p align="justify">Electronic waste is the waste generated from surplus, broken, and obsolete electronic devices that have no further ability to be reused or repurposed. Electronics contains various toxic and hazardous chemicals and materials that are released into the environment if they are not disposed of properly. Electronic recycling company has to recovery the materials from old electronic devices for re-use in new products.</p>
		</div>
		<br>
	
		<div class="h-100 p-2 bg-light text-dark border rounded-3">
		<p align="justify">While the technology for efficiently recovering and recycling key components is still developing, more companies are investing in recovery and recycling technologies, as it contributes to the future.
        Companies goal is enough to close the loop for their products will not only be market leaders in sustainability but will also have the potential to recognize cost savings by tapping into the growing e-waste management market.</p>
		</div>
      
	  <br>

<center><div class="row">
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body ">

	  <img src="https://ailit.lt/en/wp-content/uploads/sites/3/2021/01/cropped-logo.png" class="img-thumbnail " alt="...">
        <h5 class="card-title">UAB AILIT</h5>
        <p align="justify" class="card-text"></p>
        <a href="https://ailit.lt/en/" class="btn btn-md btn-outline-primary">Show details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body">
	  <img src="https://emp.lt/wp-content/uploads/2019/07/Capture.png" class="img-thumbnail " alt="...">
        <h5 class="card-title">EMP recycling</h5>
        <p align="justify" class="card-text"></p>
        <a href="https://emp.lt/en/emp-homepage/" class="btn btn-md btn-outline-primary">Show details</a>
      </div>
    </div>
  </div>
</div></center>
<br>
<center><div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
	  <img src="http://eei.lt/wp-content/uploads/2016/10/logo-1.png" class="img-thumbnail " alt="...">
        <h5 class="card-title">Elektronikos gamintojų ir importuotojų organizacija</h5>
        <p align="justify" class="card-text"></p>
        <a href="http://eei.lt/" class="btn btn-md btn-outline-primary">Show details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
	  <img src="http://www.balticrecycling.lt/client/images/logo_black.png" class="img-thumbnail " alt="...">
        <h5 class="card-title">Baltic Recycling UAB</h5>
        <p align="justify" class="card-text"></p>
        <a href="http://www.balticrecycling.lt/" class=" btn btn-md btn-outline-primary">Show details</a>
      </div>
    </div>
  </div>
</div></center>
<br>

      <div class="b-example-divider"></div>
      <br>
      <center><article class="blog-post">
	  
        <a id="ewaste"></a>
		<br>
		
        <!-- <p class="blog-post-meta">by <a href="#">Ron Tabachnik</a></p> -->
		<div class="h-100 p-2 bg-light text-dark border rounded-3">
		<h2 class="blog-post-title">Definition of E-waste</h2>
		<p align="justify">Electronic waste or e-waste describes discarded electrical or electronic devices. Used electronics which are destined for refurbishment, reuse, resale, salvage recycling through material recovery, or disposal are also considered e-waste</p>
		</div>
      
        <br>
		<div class="h-100 p-2 bg-light text-dark border rounded-3">
		<h2 class="blog-post-title">Examples of E-waste</h2>
        <p align="justify">Examples of electronic waste include, but not limited to: TVs, computer monitors, printers, scanners, keyboards, mice, cables, circuit boards, lamps, clocks, flashlight, calculators, phones, answering machines, digital/video cameras, radios, VCRs, DVD players, MP3 and CD players.</p>
		</div>
      
        <br>
		<a id="importance"></a>
		<div class="h-100 p-2 bg-light text-dark border rounded-3">
		<h2 class="blog-post-title">The reason it's important</h2>
        <p align="justify">Recycling the waste from electronics saves space in the landfills and prevents the environmental pollution caused by the toxins. Recycling also reduces the need for landfills in the first place. Goods made from recycled materials use less water, create less pollution, and uses less energy.</p>
  		</div>
      
        <br>
		<div class="h-100 p-2 bg-light text-dark border rounded-3">
		<h2 class="blog-post-title">The solution!</h2>
        <p align="justify">The vast majority of electronics can be recycled, and the items within them that can be recovered include plastic, steel, aluminum, copper, gold, silver, and other precious metals. Those metals can be given a second life, and that's why recycling is such an ideal solution to this problem.</p>
		<ul>
          <li><p align="justify">Avoid purchasing new electronic products that cannot be reused and recycled by the manufacturer.</p></li>
          <li><p align="justify">Reduce your consumption of electronic devices, and repair broken equipment before purchasing new items.</p></li>
          <li><p align="justify">Reuse your electronic devices by donating items to charity, friends, or family</p></li>
          <li><p align="justify">Recycle your electronic devices instead of sending them to landfill.</p></li>
        </ul>
		</div>
        <br>
		
       
    
		

        
        
      </article></center>
    </div>

  </main>
  <br>
  <br>

  <? include("nav_footer.php") ?>

</body>

</html>
