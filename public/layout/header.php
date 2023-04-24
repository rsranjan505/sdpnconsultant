    <?php if ($page_name == 'home' || $page_name =='') 
    {
      ?>
    <header class="section page-header" style="position: relative">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-absolute">
          <nav class="rd-navbar rd-navbar-thin" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1, #rd-navbar-hidden-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="home"><img src="public/images/logo.png" alt="" width="199" height="22"/></a>
                  <div class="rd-navbar-block" id="rd-navbar-hidden-1">
                    <div class="rd-navbar-collapse">
                      <ul class="list-inline-bordered rd-navbar-list">
                        <li><span class="icon mdi mdi-comment-text-outline"></span><a href="contact">Contact us</a></li>
                        <li><span class="icon mdi mdi-cellphone-android"></span><a href="tel:<?php  echo $contact_number ?>"><?php  echo $contact_number ?></a></li>
                      </ul>
                    </div>
                    
                  </div>
                </div>
               
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="home"><img src="public/images/logo.png" alt="" width="199" height="22"/></a>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item <?php echo $page_name=='home' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="home">Home</a>
                    </li>
					<li class="rd-nav-item <?php echo $page_name=='about' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="about">About-us</a>
                    </li>
					<li class="rd-nav-item <?php echo $page_name=='services' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="services">Our Services</a>
                    </li>
                    <li class="rd-nav-item <?php echo $page_name=='join-us' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="join-us">Join Us</a>
                    </li>                   
                    <li class="rd-nav-item <?php echo $page_name=='contact' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="contact">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    <?php
    }else {
      ?>
      <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/logo.png" alt="" width="199" height="22"/></a>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item <?php echo $page_name=='home' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="home">Home</a>
                    </li>
					<li class="rd-nav-item <?php echo $page_name=='about' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="about">About-us</a>
                    </li>
					<li class="rd-nav-item <?php echo $page_name=='services' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="services">Our Services</a>
                    </li>
                    <li class="rd-nav-item <?php echo $page_name=='join-us' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="join-us">Join Us</a>
                    </li>                   
                    <li class="rd-nav-item <?php echo $page_name=='contact' || $page_name=='' ? 'active' : ''?>"><a class="rd-nav-link" href="contact">Contacts</a>
                    </li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <?php

    }
    ?>


