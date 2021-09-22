<?php require_once('public/includes/header.php'); ?>
<!-- main header end -->

<?php extract($_REQUEST); ?>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
  <div class="container">
    <div class="breadcrumb-area">
      <h1>Hostel</h1>
      <ul class="breadcrumbs">
        <li><a href="index">Home</a></li>
        <li class="active">Hostel Name</li>
      </ul>
    </div>
  </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-15">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-xs-12 slider">
        <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
          <div class="heading-properties">
            <div class="row">
              <div class="col-md-12">
                <div class="pull-left">
                  <h3><?php echo 'Hostel Name'; ?></h3>
                  <p><i class="fa fa-map-marker"></i> <?php echo 'Kanisani'; ?></p>
                </div>
                <div class="p-r">
                  <h3>Tsh <?php echo '200K'; ?></h3>
                  <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                </div>
              </div>
            </div>
          </div>
          <!-- main slider carousel items -->
          <div class="carousel-inner">
            <div class="active item carousel-item" data-slide-number="0">
              <img src="media/images/<?php echo "property-3.jpg"; ?>" class="img-fluid" alt="property-4">
            </div>
            <div class="item carousel-item" data-slide-number="1">
              <img src="media/images/<?php echo "property-2.jpg"; ?>" class="img-fluid" alt="property-6">
            </div>
            <div class="item carousel-item" data-slide-number="2">
              <img src="media/images/<?php echo "property-3.jpg"; ?>" class="img-fluid" alt="property-1">
            </div>
            <div class="item carousel-item" data-slide-number="4">
              <img src="media/images/<?php echo "property-2.jpg"; ?>" class="img-fluid" alt="property-5">
            </div>
            <div class="item carousel-item" data-slide-number="5">
              <img src="media/images/<?php echo "property-3.jpg"; ?>" class="img-fluid" alt="property-8">
            </div>

            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

          </div>
          <!-- main slider carousel nav controls -->
          <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
            <li class="list-inline-item active">
              <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                <img src="media/images/<?php echo "property-3.jpg"; ?>" class="img-fluid" alt="property-4">
              </a>
            </li>
            <li class="list-inline-item">
              <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                <img src="media/images/<?php echo "property-2.jpg"; ?>" class="img-fluid" alt="property-6">
              </a>
            </li>
            <li class="list-inline-item">
              <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                <img src="media/images/<?php echo "property-3.jpg"; ?>" class="img-fluid" alt="property-1">
              </a>
            </li>
            <li class="list-inline-item">
              <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                <img src="media/images/<?php echo "property-2.jpg"; ?>" class="img-fluid" alt="property-5">
              </a>
            </li>
            <li class="list-inline-item">
              <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                <img src="media/images/<?php echo "property-3.jpg"; ?>" class="img-fluid" alt="property-8">
              </a>
            </li>
          </ul>
        </div>

        <!-- Tabbing box start -->
        <div class="tabbing tabbing-box mb-60">
          <ul class="nav nav-tabs" id="carTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">In Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Related Properties</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="" data-toggle="tab" href="#" role="tab" aria-controls="three" aria-selected="true">Location In Map</a>
            </li>
          </ul>
          <div class="tab-content" id="carTabContent">
            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
              <h3 class="heading">Property Description</h3>
              <p><?php echo '$description'; ?></p>
            </div>
            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
              <div class="floor-plans mb-60">
                <h3 class="heading">Floor Plans</h3>
                <table>
                  <tbody>
                    <tr>
                      <td><strong>Size</strong></td>
                      <td><strong>Rooms</strong></td>
                      <td><strong>2 Bathrooms</strong></td>
                    </tr>
                    <tr>
                      <td>1600</td>
                      <td>3</td>
                      <td>2</td>
                    </tr>
                  </tbody>
                </table>
                <img src="assets/img/floor-plans.png" alt="floor-plans" class="img-fluid">
              </div>
            </div>
            <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
              <div class="amenities-box mb-60">
                <h3 class="heading">Property Details</h3>
                <div class="row">
                  <div class="col-md-4 col-sm-6">
                    <ul>
                      <li>
                      <i class="flaticon-money-bag-with-dollar-symbol"></i>
                        <strong>Price:</strong> <?php echo '$price'; ?>/
                      </li>
                      <li>
                        <strong>Property Type:</strong> <?php echo '$property_type'; ?>
                      </li>
                      <li>
                        <strong>Bathrooms:</strong> <?php echo '$bathroom'; ?>
                      </li>

                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <ul>
                      <li>
                        <strong>Property Lot Size:</strong> <?php echo '$lot_size'; ?>
                      </li>
                      <li>
                        <strong>Land area:</strong> <?php echo '$land_area'; ?>
                      </li>

                      <li>
                        <strong>Garages:</strong> Yes
                      </li>
                      <li>
                        <strong>Bedroom:</strong> <?php echo '$bedroom'; ?>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <ul>
                      <li>
                        <strong>Sold:</strong> <?php echo '$sold'; ?>
                      </li>
                      <li>
                        <strong>Address:</strong> <?php echo '$address'; ?>
                      </li>
                      <li>
                        <strong>Parking:</strong> Yes
                      </li>
                      <li>
                        <strong>Property Owner:</strong> <?php echo '$property_owner'; ?>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-12">
        <div class="sidebar mbl">
          <!-- Search area start -->

          <!-- Categories start -->

          <!-- Recent posts start -->
          <div class="widget recent-posts">
            <h5 class="sidebar-title">Recent Properties</h5>
            <div class="media mb-4">
              <a href="properties-details.html">
                <img src="media/images/property-3.jpg" alt="sub-property">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">Beautiful Single Home</a>
                </h5>
                <p> <strong>Tsh 300K</strong></p>
              </div>
            </div>
            <div class="media mb-4">
              <a href="properties-details.html">
                <img src="media/images/property-3.jpg" alt="sub-property">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">Sweet Family Home</a>
                </h5>
                <p> <strong>Tsh 400K</strong></p>
              </div>
            </div>
            <div class="media">
              <a href="properties-details.html">
                <img src="media/images/property-3.jpg" alt="sub-property">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">Real Luxury Villa</a>
                </h5>
                <p> <strong>Tsh 600K</strong></p>
              </div>
            </div>
          </div>

          <!-- Social list start -->
          <div class="social-list widget clearfix">
            <h5 class="sidebar-title">Follow Us</h5>
            <ul>
              <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

          <!-- Helping center start -->
          <div class="helping-center widget clearfix">
            <div class="media">
              <i class="fa fa-mobile"></i>
              <div class="media-body  align-self-center">
                <h5 class="mt-0">Helping Center</h5>
                <h4><a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a></h4>
              </div>
            </div>
          </div>

          <!-- Financing calculator  start -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Properties details page end -->



<!-- Footer start -->
<?php include('public/includes/footer.php'); ?>
<!-- Footer end -->