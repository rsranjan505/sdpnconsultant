<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(public/images/contact-bg.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Contacts</h6>
              <h1 class="breadcrumbs-custom-title">Contacts</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="home">Home</a></li>
              <li class="active">Contacts</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                <ul class="list-0">
                  <li><a class="link-default" href="tel:<?php  echo $contact_number ?>"><?php  echo $contact_number ?></a></li>
                  
                </ul>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:<?php  echo $contact_email ?>"><?php  echo $contact_email ?></a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#"><?php  echo $address ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
        include 'components\contact-form.php';
      ?>
