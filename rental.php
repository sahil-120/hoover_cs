<!DOCTYPE html>
<html lang="en">
<!-- 352511084635382 -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rentail</title>
    <?php include('./header_footer/link.php') ?>
</head>

<body>
<div id="overlayer"></div>
  <div class="preloader">
    <div class="loader">
      <svg viewBox="-2000 -1000 4000 2000" class="preloader__hoover">
        <path id="inf" d="M354-354A500 500 0 1 1 354 354L-354-354A500 500 0 1 0-354 354z"></path>
        <use xlink:href="#inf" stroke-dasharray="1570 5143" stroke-dashoffset="6713px"></use>
      </svg>
    </div>
  </div>
    <?php include('./header_footer/header.php') ?>
    <div class="retal_page container">
        <div class="hero_retal">
            <h1>Hoover CS Rentals</h1>
            <p>From IBCs and Catalyst Bins to ISO Tanks and specialty containers, Hoover CS is proud to manage one of the largest rental fleets in the market. Browse our available rentals below</p>
            <div class="flex">
                <div class="btn_quoe">
                    <a class="btn_1" href="#">Send me a Quote</a>
                </div>
                <div class="select_retal">
                    <p>Quick Product Access: </p>
                    <select ><i class="fa-solid fa-bars"></i>
                        <option>Select one</option>
                        <option>Standard IBCs</option>
                        <option>Standard IBCs – Europe</option>
                        <option>Cargo Valve IBCs</option>
                        <option>Custom IBCs</option>
                        <option>Hopper Totes</option>
                        <option>Poly IBCs</option>
                        <option>Composite IBCs</option>
                        <option>Aviation IBCs</option>
                        <option>Food &amp; Beverage IBCs</option>
                        <option>Polycone 45 Polyethylene IBCs</option>
                        <option>Stacked Systems</option>
                        <option>IBC Accessories</option>
                        <option>Catalyst Bins – North America</option>
                        <option>Catalyst Bins – Europe &amp; APAC</option>
                        <option>Specialty Catalyst Bins</option>
                        <option>Standard ISO Tanks</option>
                    </select>
                </div>
            </div>


        </div>
    </div>
    <?php include('./header_footer/footer_notification.php') ?>
    <?php include('./header_footer/footer.php') ?>
    <script src="./js/app.js"></script>
</body>

</html>