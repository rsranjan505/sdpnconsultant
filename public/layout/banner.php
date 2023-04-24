<?php
  if($page_name =='home'){
    $banner_name = 'Home';
  }else if($page_name == 'about'){
    $banner_name = 'About Us';
  } else if($page_name == 'projects'){
    $banner_name = 'Our Projects';
  } else if($page_name == 'services'){
    $banner_name = 'Services';
  } else if($page_name == 'careers'){
    $banner_name = 'Careers';
  } else if($page_name == 'contact'){
    $banner_name = 'Contact Us';
  }else{
    $banner_name = '';
  }
?>

<div id="banner-area" class="banner-area" style="background-image:url(public/images/banner/banner2.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php echo $banner_name; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <!-- <li class="breadcrumb-item"><a href="#">company</a></li> -->
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $banner_name; ?></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 
