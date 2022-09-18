<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Innovative has a network of distributors across Canada and the United States. Click on the links below for our distributor listing." />
    <meta name="keywords" content="Deicers, anti-icers, road maintenance solutions, liquid deicers, packaged deicers, asphalt maintenance, de-icing, dust control" />
    <meta name="apple-mobile-web-app-title" content="Distributors / Dealers" />

    <meta property="og:site_name" content="Distributors / Dealers" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Distributors / Dealers" />
    <meta property="og:image" content="https://www.innovativecompany.com/ui/images/terminal-map@2x.webp" />
    <meta property="og:description" content="Innovative has a network of distributors across Canada and the United States. Click on the links below for our distributor listing." />
    <meta property="og:url" content="https://www.innovativecompany.com/distributor.php" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:site" content="@Innovativecomp" />
    <meta property="twitter:creator" content="@Innovativecomp" />

    <link rel="canonical" href="https://www.innovativecompany.com/distributor.php" />
    <link rel="icon" href="./ui/icons/favicon.ico" type="image/x-icon" />


    <link href="./ui/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="./ui/css/core.css" rel="stylesheet" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/99580e6ec6.js" crossorigin="anonymous"></script>

    <title>Distributors / Dealers | Innovative Surface Solutions</title>
    <?php include_once("./includs/gtm.php"); ?>
</head>

<body>
    <?php include_once("./includs/analyticstracking.php") ?>
    <div class="inn__main-header">
        <?php include_once("./includs/top-nav.php") ?>
        <?php include_once("./includs/main-nav.php") ?>
    </div>


    <div class="container-xl inn__header-breadcrumb">

        <nav aria-label="breadcrumb" class="mx-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Distributors / Dealers</li>
            </ol>
        </nav>

    </div>


    <div class="container-xl px-2">
        <h2 class="inn__main-title mx-4">Distributors / Dealers</h2>

        <ul class="inn__main-mainTab nav nav-tabs" id="dealers" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="canada-tab" data-bs-toggle="tab" data-bs-target="#canada"
                    type="button" role="tab" aria-controls="canada" aria-selected="true"><img
                        src="./ui/images/can-flag.svg" alt="">Canada</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="usa-tab" data-bs-toggle="tab" data-bs-target="#usa" type="button"
                    role="tab" aria-controls="usa" aria-selected="false"><img src="./ui/images/us-flag.svg"
                        alt="">United States</button>
            </li>

        </ul>
        <div class="tab-content" id="dealersContent">
            <div class="tab-pane fade show active" id="canada" role="tabpanel" aria-labelledby="canada-tab">
                <?php include_once("./includs/canada.php") ?>
            </div>
            <div class="tab-pane fade" id="usa" role="tabpanel" aria-labelledby="usa-tab">
            <?php include_once("./includs/usa.php") ?>
            </div>
        </div>



    </div>

    <?php include_once("./includs/footer.php") ?>

    
</body>

</html>