<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <?php 
    include "seo.php";
  ?>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $title;?> </title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="description" content="<?php echo $description;?>">

  <meta name="keywords" content="<?php echo $keywords;?>">
  <Meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <Meta name="Yahoobot" content="index, follow" />
  <meta name="MSNbot" content="Index, Follow" />
  <meta name="allow-search" content="yes" />
  <Meta name="author" content="<?php echo $author;?>" />
  <Meta name="revisit-after" content="3 days"/>
  <Meta name="country" content="India"/>
  <Meta name= "geography" content ="<?php echo $address ?>"/>
  <Meta name="contactNumber" content="<?php echo $contact_number;?>"/>
  <Meta name="dc.language" content="english"/>
  <Meta name="geo.region" content="IN-BH" />
  <Meta name="geo.placename" content="Patna" />
  <Meta name="geo.position" content="" />
  <Meta name="ICBM" content="" />
  <meta property="og:url" content="<?php echo $domain ?>" />
  <meta property="og:image" content="<?php echo $domain ?>/public/images/favicon.ico"/>
  <meta property="og:type" content="<?php echo $domain ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="<?php echo $og_title ?>" />
  <meta property="og:description" content="<?php echo $og_description ?>" />
  <meta property="og:keyword" content="<?php echo $og_keywords ?>" />


  <link rel="icon" type="image/png" href="public/images/favicon.ico">
  <!-- <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="public/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="public/plugins/animate-css/animate.css">
  <link rel="stylesheet" href="public/plugins/slick/slick.css">
  <link rel="stylesheet" href="public/plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="public/plugins/colorbox/colorbox.css">
  <link rel="stylesheet" href="public/css/style.css"> -->

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700">
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/fonts.css">
  <link rel="stylesheet" href="public/css/style.css">

</head>
<body>
  <div class="page">

    <?php
        // include "layout/top_bar.php";
        include "layout/header.php";
        if($page_name == '' || $page_name == 'home'){
            // include "layout/hero_section.php";
            // include "section/call_action.php";
            include "home.php";
        }else{
            // include "layout/banner.php";
            if($page_name == 'about'){
                include "about.php";
            }else if($page_name == 'join-us'){
                include "join-us.php";
            }else if($page_name == 'services'){
              include "services.php";
            }else if($page_name == 'careers'){
              include "careers.php";
            }else if($page_name == 'contact'){
              include "contact.php";
            }
        }
        // include "section/news.php";
        include "layout/footer.php";
    ?>
    <div class="preloader"> 
      <div class="preloader-logo"><img src="public/images/logo.png" alt="" width="199" height="22"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="public/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <!-- <script src="public/plugins/bootstrap/bootstrap.min.js" defer></script> -->
  <!-- Slick Carousel -->
  <!-- <script src="public/plugins/slick/slick.min.js"></script> -->
  <!-- <script src="public/plugins/slick/slick-animation.min.js"></script> -->
  <!-- Color box -->
  <!-- <script src="public/plugins/colorbox/jquery.colorbox.js"></script> -->
  <!-- shuffle -->
  <!-- <script src="public/plugins/shuffle/shuffle.min.js" defer></script> -->
  <!-- Google Map API Key-->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script> -->
  <!-- Google Map Plugin-->
  <!-- <script src="public/plugins/google-map/map.js" defer></script> -->

  <!-- Template custom -->
  <!-- <script src="public/js/script.js"></script>
  <script src="public/php-email-form/validate.js"></script> -->

  <script src="public/js/core.min.js"></script>
  <script src="public/js/script.js"></script>


  </div><!-- Body inner end -->
  </body>

  </html>