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

  <br>
  <br>
  <main>
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Recycling companies</h2>
      <p>Companies are in various stages of their e-waste management journey—whether due to recent recognition of potential e-waste in new products or improving programs for existing products. A company sits in the electronics product lifecycle, the
        first steps are to identify material risks presented by e-waste, assess the actions already taken, and map out a strategy for moving forward.
        Electronic waste is the waste generated from surplus, broken, and obsolete electronic devices that have no further ability to be reused or repurposed. Electronics contains various toxic and hazardous chemicals and materials that are released
        into the environment if they are not disposed of properly. Electronic recycling company has to recovery the materials from old electronic devices for re-use in new products.
        While the technology for efficiently recovering and recycling key components is still developing, more companies are investing in recovery and recycling technologies, as it contributes to the future.
        Companies goal is enough to close the loop for their products will not only be market leaders in sustainability but will also have the potential to recognize cost savings by tapping into the growing e-waste management market. </p>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://ailit.lt/en/wp-content/uploads/sites/3/2021/01/cropped-logo.png');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">UAB AILIT</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center">
                  <a href="https://ailit.lt/en/">Show details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Elektronikos perdirbimas UAB</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center">
                  <a href="#">Show details</a>
                </li>
              </ul>
            </div>
          </div>
        </div> -->

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://emp.lt/wp-content/uploads/2019/07/Capture.png');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">EMP recycling</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center">
                  <a href="https://emp.lt/en/emp-homepage/">Show details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" width=40px height=40px style="background-image: url('http://eei.lt/wp-content/uploads/2016/10/logo-1.png');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Elektronikos gamintojų ir importuotojų organizacija</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center">
                  <a href="http://www.eei.lt/about-us/">Show details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('http://www.balticrecycling.lt/client/images/logo_black.png');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Baltic Recycling UAB</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center">
                  <a href="http://www.balticrecycling.lt/">Show details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="b-example-divider"></div>
      <br>
      <article class="blog-post">
        <h2 class="blog-post-title">Definition of E-waste</h2>
        <!-- <p class="blog-post-meta">by <a href="#">Ron Tabachnik</a></p> -->
        <p>When the word “recycling” gets mentioned, people often think of soda cans, water bottles, cardboard boxes, or newspapers – common household items. What they might not immediately think of is a whole host of other items – including
          toothbrushes, eyeglasses, toilets, and pharmaceutical drugs. The list goes on and on.
          We want to recycle each one of these items to avoid an ecological disaster in our landfills, which could happen if everything we toss out ends up in a landfill. We need to recognize the contribution that recycling makes to helping us
          manufacture new products from the parts of older ones.
          Another item that belongs on the list is something else: electronics. They’re one of the things we want to be certain we recycle because the environmental risks otherwise are quite serious. We know that used electronics contain toxins like
          mercury and lead. These toxins, if disposed of improperly, can contaminate our soil and water, proving deadly to both humans and wildlife. Recycling keeps devices (with deadly toxins) out of landfills and ensures the valuable parts within
          them can be reused to make new products.
          But what a lot of people may not know is how many different electronics fit into the category of “recyclable.”
          But it’s very consequential that the word hasn’t gotten out about how many different things can be recycled, or about the extensive definition of e-waste. Americans alone throw away 9.4 million tons of electronics each year, making the U.S.
          No. 1 worldwide for e-waste produced annually. And far too many Americans simply don’t know what e-waste is, how it gets defined, and what should be recycled. </p>
        <hr>
        <h2 class="blog-post-title">Examples of E-waste</h2>
        <p>E-waste isn’t limited to devices we use for Google searches, exploring the Internet, and sending out messages, and other types of ICT (Information and Communications Technologies) and telecommunications equipment.
          The definition can include office electronics like photocopying equipment and pocket and desk calculators, or automatic dispensers for hot drinks, bottles or cans, and ATMs.
          The list includes large household appliances like refrigerators, freezers, washing machines, dishwashing machines, microwaves, electric heating appliances, electric hotplates, electric radiators, electric fans, air conditioner appliances,
          and exhaust ventilation.
          Smaller household appliances would also fit in, such as vacuum cleaners, carpet sweepers, water dispensers, toasters, fryers, electric knives, clocks, hair dryers and sewing machines. The list includes the way we light our homes, including
          fluorescent tubes, compact fluorescent lamps, and high intensity and discharge lamps.
          Head outside to your tool shed. You’ll find more items in there, including equipment for milling, sanding, grinding, sawing, cutting, shearing, and drilling – or tools for welding, soldering, mowing or other gardening activities.
          If you have children, chances are they own items on the list, whether it’s electric trains or car racing sets, hand-held video game, and sports equipment with electronic components </p>
        <hr>
        <h2 class="blog-post-title">The reason it's important</h2>
        <p>As our society’s dependence on electronics grows, so does our electronic waste (also known as e-waste). With more electronics being bought and shelf life decreasing, our e-waste production has never been higher. E-waste must be discarded
          properly; it can't simply be thrown into the trash. However, many people do not know just how important it is to recycle e-waste at a salvage scrap yard in Clare, MI, or any other facility. Here are a few reasons why this sort of recycling
          is so vital.
          Electronic devices are a fertile source of valuable raw materials. Just because these devices no longer work does not mean that the materials cannot be used again. Gold, aluminum, copper, and other raw materials can be stripped from old
          electronics and reused to make new ones. The possibility of increasing e-waste recycling is great as presently only about 10 to 15 percent of the gold in e-waste is recovered internationally.
          Electronic devices also contain toxic substances like cadmium, chromium, lead, mercury, and more. They can also be made of other heavy metals and possible toxic chemicals, like flame retardants. To prevent these substances from being
          released into the environment, e-waste needs to be recycled properly at a salvage junk yard in Clare, MI. </p>
        <hr>
        <h2 class="blog-post-title">The solution!</h2>
        <p>There are several ways that general practices can be mindful of the current situation and begin to discard electronic waste in a responsible way. It is no longer acceptable to leave electronic hardware on the nature strip for garbage
          collection.
          Recycling companies can be contacted to collect various types of e-waste that need to be removed and recycled, and there are organizations where you can drop off your e-waste without charge.
          To find e-waste recycling service locations near your general practice, visit the Recycling Near You.
        </p>
        <ul>
          <li>Avoid purchasing new electronic products that cannot be reused and recycled by the manufacturer.</li>
          <li>Reduce your consumption of electronic devices, and repair broken equipment before purchasing new items.</li>
          <li>Reuse your electronic devices by donating items to charity, friends, or family</li>
          <li>Recycle your electronic devices instead of sending them to landfill.</li>
        </ul>
      </article>
    </div>

  </main>
  <br>
  <br>
  <div class="b-example-divider"></div>


  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About us</a></li>
            <li class="nav-item mb-2"><a href="recycling.php" class="nav-link p-0 text-muted">Recycling</a></li>
            <li class="nav-item mb-2"><a href="market.php" class="nav-link p-0 text-muted">Market</a></li>
            <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Contact us</a></li>
          </ul>
        </div>

        <div class="col-4 offset-1">
          <!-- <form> 
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of whats new and exciting from us.</p>
             <div class="d-flex w-100 gap-2"> 
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>-->
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>&copy; 2022 K212 group (KTU), Inc. All rights reserved</p>
        <!-- <ul class="list-unstyled d-flex"> 
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook" />
              </svg></a></li>
        </ul>-->
      </div>
    </footer>
    <!-- </div>
  <footer class="blog-footer footer mt-auto py-3 bg-light">
    <p>Copyrights</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer> -->



</body>

</html>
