<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packaging</title>
    <link rel="stylesheet" href="./sass/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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
    <div class="packaging_page container">
        <div class="hero_banner packaging_banner ">
            <div class="sub_packaging_title">
                <h1 class="title">
                    Sustainable <br>packaging
                </h1>
                <p class="title_packaging">
                    In a world of increasing demand for sustainable solutions, Hoover CS is here to guide you from wasteful single-use packaging to one of circularity. When you shift to sustainable packaging, you demonstrate your commitment to making an impact for good by optimizing your company’s environmental footprint through shrinking greenhouse gas emissions, conserving water, and reducing plastics usage. Whether you need IBCs for chemicals or solids, Catalyst Bins for fresh or spent catalyst, or ISO Tanks for bulk chemicals, we provide practical alternatives to single-use packaging, ensuring you stay on the leading edge of sustainability.
                </p>
            </div>
        </div>
        <section class="envorment_impact">
            <h3>Ready to Reduce your Environmental Impact?</h3>
            <p class="pb25">Using our calculator below, answer a single question to understand how switching from single-use to Hoover CS reusable IBCs benefit the environment.
            </p>
            <p class="pb25"><strong>Select one question below.</strong></p>
            <div class="btn-packing pb25">
                <a href="#" class="chemical text-center vis">How many gallons of chemicals do you ship annually?</a>
                <a href="#" class="chemical text-center">How many gallons of chemicals do you ship annually?</a>
                <a href="#" class="chemical text-center">How many single-use IBCs do you utilize per year?</a>
                <a href="#" class="chemical text-center vis">How many single-use IBCs do you utilize per year?</a>
            </div>
        </section>

        <section class="icon">
            <div class="main_icon">
                <h5 class="text-center">Positive Effects
                    <br> for the Planet
                </h5>
                <p >This is equivalent to carbon sequestered by</p>
                <div class="plant_tree flex">
                    <div class="box_icon plant">
                        <p class="icon_title
                    ">Tree seedlings grown for 10 years</p>
                        <div class="box_icon_bg">
                            <h4 class="green-text">0</h4>
                        </div>
                        
                    </div>
                    <div class="box_icon tree">
                        <p>Tree seedlings grown for 10 years</p>
                        <div class="box_icon_bg">
                            <h4 class="green-text">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include('./header_footer/footer_notification.php') ?>
    <?php include('./header_footer/footer.php') ?>
    <script src="./js/app.js"></script>
</body>

</html>