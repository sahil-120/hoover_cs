
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aboutus</title>
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
    <?php include('./aboutus_template/hero-banner.php') ?>
    <?php include('./aboutus_template/about_page.php') ?>
    <?php include('./header_footer/footer_notification.php') ?>
    <?php include('./header_footer/footer.php') ?>
    <script src="./js/app.js"></script>
</body>

</html>