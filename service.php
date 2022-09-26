<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hoover|Services</title>
  <?php include('./header_footer/link.php') ?>
</head>

<body>
  <?php include('./header_footer/preloader.php') ?>
  <?php include('./header_footer/header.php') ?>
  <div class="container service__page">
    <div class="herobanner service__banner">
      <div class="flex">
        <div class="banner__title title">
          <h1>Services</h1>
        </div>
        <div class="banner_descr">
          <p>Whether you are taking advantage of our massive rental fleet or looking to support your own assets, Hoover CS protects the integrity of every single container. With a service offering that includes tank cleaning, reconditioning, and regulatory recertifications, we make the process easy on your operations and positive for the environment. <br><br> Browse our Services below or <a href="./contact.php">contact us</a> to learn more.</p>
        </div>
      </div>
    </div>
    <div class="warpper">
      <input class="radio" id="one" name="group" type="radio" checked>
      <input class="radio" id="two" name="group" type="radio">
      <input class="radio" id="three" name="group" type="radio">
      <div class="tabs">
        <label class="tab" id="one-tab" for="one">Bulk Chemical Transportation</label>
        <label class="tab" id="two-tab" for="two">Tank Services</label>
        <label class="tab" id="three-tab" for="three">Bulk Catalyst Services</label>
      </div>
      <div class="panels">
        <div class="panel" id="one-panel">
          <p class="caution">Caution! These documents are provided only as general information to guide your thinking and understanding about Hoover CS products and services. They should not be used for any other purpose. If you need specific information, please contact your Hoover CS representative. Hoover CS does not warrant (neither express nor implied) that the information in these charts is accurate or complete or that any material is suitable for any purpose. If you need specific information, please contact your Hoover CS representative.</p>
        </div>
        <div class="panel" id="two-panel">
          <p class="caution">You will leCaution! These documents are provided only as general information to guide your thinking and understanding about Hoover CS products and services. They should not be used for any other purpose. If you need specific information, please contact your Hoover CS representative. Hoover CS does not warrant (neither express nor implied) that the information in these charts is accurate or complete or that any material is suitable for any purpose. If you need specific information, please contact your Hoover CS representative.</p>
        </div>
        <div class="panel" id="three-panel">
          <p class="caution">We recommend that you complete Learn HTML before Caution! These documents are provided only as general information to guide your thinking and understanding about Hoover CS products and services. They should not be used for any other purpose. If you need specific information, please contact your Hoover CS representative. Hoover CS does not warrant (neither express nor implied) that the information in these charts is accurate or complete or that any material is suitable for any purpose. If you need specific information, please contact your Hoover CS representative.</p>
        </div>
      </div>
    </div>
    <!-- table  -->
    <div class="services__table">
      <h3 class="text-center">The General Cleaning Process for IBCs, ISO Tanks & Trailers</h3>
      <p class="text-center"> Note: Different chemicals may require alternative cleaning processes.</p>
      <table>
        <thead>
          <tr>
            <td>Cycle</td>
            <td>Objective</td>
            <td>Operation</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Dirty Flush</td>
            <td>Flush with recycled water and transfer to wastewater tank</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Hot Detergent Wash</td>
            <td>Wash and recirculate detergent (or caustic) in a closed circuit</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Freshwater Rinse</td>
            <td>Rinse with hot or cold freshwater and return back to recycled water tank</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Steam Cycle</td>
            <td>Steam interior with direct feed from boiler system</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Drying Cycle</td>
            <td>Dry interior with filtered ambient air</td>
          </tr>
        </tbody>
      </table>
      <h3 class="text-center service--title">Our Service Centers Are Ready To Support You</h3>
      <p class="text-center">For a full list of Hoover CS service centers and 3rd party approved cleaning facilities, <a href="#" class="green_link">click here.</a> </p>
    </div>
    <div class="service__map">
      <div class="mapouter">
        <div class="gmap_canvas"><iframe width="1420" height="720" id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
      </div>
    </div>
    <div class="service__section flex">
      <div class="col6">
        <img src="./image/icon-safety.svg" alt="">
        <h5 class="text-light">Innovative
          <br> & Sustainable
        </h5>
        <p class="text-light">Doubling down on our commitment to sustainability, our service centers leverage innovative water reclamation and reuse techniques ensuring responsible practices when servicing IBCs, Catalyst Bins, and ISO tanks. By partnering with Hoover CS, you are joining us in our commitment to the environment and facilitating greater circularity across your supply chain by extending the shelf life for all your tanks and containers.</p>
      </div>
      <div class="col6">
        <img src="./image/icon-care.svg" alt="">
        <h5 class="text-light">Innovative
          <br> & Sustainable
        </h5>
        <p class="text-light">Doubling down on our commitment to sustainability, our service centers leverage innovative water reclamation and reuse techniques ensuring responsible practices when servicing IBCs, Catalyst Bins, and ISO tanks. By partnering with Hoover CS, you are joining us in our commitment to the environment and facilitating greater circularity across your supply chain by extending the shelf life for all your tanks and containers.</p>
      </div>
    </div>
  </div>
  <?php include('./header_footer/footer_notification.php') ?>
  <?php include('./header_footer/footer.php') ?>
  <script src="./js/app.js"></script>
</body>

</html>