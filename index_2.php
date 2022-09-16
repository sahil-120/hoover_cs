<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php include('./homepage_templates/homebanner.php') ?>
    <div class="container">
        <div class="track_homepage">
            <h2 class="title text-center">
            We’ve taken the pledge to achieve Net Zero by 2030
            </h2>
            <p class="heading text-center">Have You?</p>
            <p class="text-center mw534 
            ">Hoover CS can help your company measure its environmental impact, and together, we can make a real difference for the future of our planet.</p>
            <div class="btn talk-btn text-center">
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
    <?php include('./header_footer/footer_notification.php') ?>
    <?php include('./header_footer/footer.php') ?>
    <script src="./js/app.js"></script>
</body>

</html>