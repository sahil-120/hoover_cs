<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDRUSTIES</title>
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
    <div class="container ind-banner">
        <p class="ss"><a href="#">Home/Industries</a></p>
        <h1>Industries</h1>
        <p class="banner-descr">Hoover CS is the leading circular packaging provider for a wide range of customers within the chemical, refining, and general industrial markets looking to increase their sustainability profiles through greater participation in circular supply chains. Leverage our chemical packaging and logistics expertise and make a commitment for the good of your business – and our environment.</p>
        <p class="ind_btn">
            <a href="#">Industrial Chemicals</a>
            <a href="#">Refining & Petrochemical</a>
            <a href="#">Coatings & Paint</a>
            <a href="#">Pharmaceutical & Cosmetic</a>
            <a href="#">Food & Beverage</a>
        </p>
    </div>
    <div class="container second_img flex">
        <div class="left">
            <h2 class="titl">Industrial Chemicals</h2>
            <p>Industrial chemical companies of all kinds are reaping the environmental and business benefits of circular packaging in their supply chains with Hoover CS’s selection of stainless-steel IBCs and ISO tanks. From specialty and production chemicals to polymers, organic, and life-sciences chemicals, we provide the most reliable handling, storage, and delivery solutions in the industry. Not only did we pioneer the original IBC of the chemical handling industry, but we have continued to adapt and grow, now offering a range of sizes and specialty tanks such as Cargo Valve Tanks with enhanced fire safety for the production chemicals market.
                <br><br><br>
                Our fleet of 20-foot ISO Bulk Delivery Units on chassis available with innovative oilfield modifications and outfitted with cutting-edge technology are perfect for meeting the increased demand for the intermodal transportation, storage, and last-mile wellsite delivery of completion and stimulation chemicals.
            </p>
        </div>
        <div class="right">
            <img src="./image/chemical_plant.png" alt="" loading="lazy">
        </div>
    </div>
    <div class="container third_img flex">
        <div class="left">
            <img src="./image/big-store.png" alt="" loading="lazy">
        </div>
        <div class="right">
            <h2 class="titl">Refining & Petrochemical</h2>
            <p>Bring sustainability into your supply chain by harnessing Hoover CS’s reusable catalyst packaging solutions. As the largest global supplier of Catalyst Bins, Hoover CS is truly the industry standard for the storage, handling, and transportation of fresh, spent, and presulfided catalysts.
                <br><br>
                Our rental fleet of Catalyst Bins are UN-11AX approved, hermetically sealed, and designed to prevent leakage and spills. To withstand hazardous waste, we build our Catalyst Bins with high quality carbon and stainless-steel, prioritizing container integrity and quality. We also offer reusable liquid IBCs and ISO tanks suitable for the needs of refineries and petrochemical companies.
                <br><br>

                Talk with us about our expertise in affiliated services:
            </p>
            <ul>
                <li>Hazardous waste transportation</li>
                <li>Catalyst repackaging and storage</li>
                <li>On-site support</li>
                <li>Warehousing and bulk management</li>
                <li>Trace and track capabilities</li>
            </ul>
        </div>
    </div>
    <div class="container second_img fourth_img flex">
        <div class="left">
            <h2 class="titl">Coatings & Paint</h2>
            <p>Companies storing and transporting paint and industrial coatings are long past the point where they can afford waste, whether that’s environmental waste from single-use plastic containers or the economic impact of residue being left in the containers.
                <br><br>
                Built to last 25+ years, Hoover CS reusable and sustainable stainless-steel IBCs are compatible with many popular accessories, such as blenders and mixers to ensure homogeneity of the product upon delivery.
                <br><br>
                Understanding the unique challenges of storing paint, Hoover CS not only stores your product but can also protect the integrity of tanks through our wash services, including interior and exterior cleanings.
            </p>
        </div>
        <div class="right">
            <img src="./image/paintgas.png" alt="" loading="lazy">
            <img src="./image/paintgas.png" alt="" loading="lazy">
        </div>
    </div>
    <div class="container second_img fifth_img flex">
        <div class="right">
            <img src="./image/pharmaceutical_industry.png" alt="">
        </div>
        <div class="left">
            <h2 class="titl">Pharmaceutical & Cosmetic</h2>
            <p>Hoover CS helps businesses in the pharmaceutical and cosmetics industries to augment the eco-friendliness of their supply chains with sustainable packaging. Let us amplify your efforts and show you how to achieve your sustainable development goals by reducing your carbon footprint, transitioning to reusable IBCs in a circular supply chain, and minimizing reliance on single-use plastic packaging.
            </p>
        </div>
    </div>
    <div class="container second_img fourth_img flex">
        <div class="left">
            <h2 class="titl">Food & Beverage</h2>
            <p>Hoover CS supplies high-quality, food-grade IBCs for all kinds of foods, beverages, spices, oils, flavorings, dyes, ingredients, seasonings, and chemical additives. We additionally provide cleaning and sanitation services, transportation and logistics support, and extras like tech offerings and cooling jackets to maintain freshness and efficient yield.
            </p>
        </div>
        <div class="right">
            <img src="./image/food_and_beverage.png" alt="">
        </div>
    </div>
    <?php include('./header_footer/footer_notification.php') ?>
    <?php include('./header_footer/footer.php') ?>
    <script src="./js/app.js"></script>
</body>

</html>