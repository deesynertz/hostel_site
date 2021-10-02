<body>
  <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-box">

    <!-- Side Overlay-->
    <aside id="side-overlay">
      <!-- Side Header -->
      <div class="content-header border-bottom">
        <!-- User Avatar -->
        <a class="img-link mr-1" href="javascript:void(0)">
          <img class="img-avatar img-avatar32" src="../media/avatar/avatar0.jpg" alt="">
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <div class="ml-2">
          <a class="text-dark font-w600 font-size-sm" href="javascript:void(0)">Adam McCoy</a>
        </div>
        <!-- END User Info -->

        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
          <i class="fa fa-fw fa-times"></i>
        </a>
        <!-- END Close Side Overlay -->
      </div>
      <!-- END Side Header -->

      <!-- Side Content -->
      <div class="content-side">
        <!-- Side Overlay Tabs -->
        <div class="block block-transparent pull-x pull-t">
          <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#so-overview">
                <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#so-sales">
                <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
              </a>
            </li>
          </ul>
          <div class="block-content tab-content overflow-hidden">
            <!-- Overview Tab -->
            <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
              <!-- Activity -->
              <div class="block">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Recent Activity</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                  </div>
                </div>
                <div class="block-content">
                  <!-- Activity List -->
                  <ul class="nav-items mb-0">
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="si si-wallet text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-size-sm font-w600">New sale ($15)</div>
                          <div class="text-success">Admin Template</div>
                          <small class="font-size-sm text-muted">3 min ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="si si-pencil text-info"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-size-sm font-w600">You edited the file</div>
                          <div class="text-info">
                            Documentation.doc
                          </div>
                          <small class="font-size-sm text-muted">15 min ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="si si-close text-danger"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-size-sm font-w600">Project deleted</div>
                          <div class="text-danger">Line Icon Set</div>
                          <small class="font-size-sm text-muted">4 hours ago</small>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!-- END Activity List -->
                </div>
              </div>
              <!-- END Activity -->

              <!-- Online Friends -->
              <div class="block">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Online Friends</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                  </div>
                </div>
                <div class="block-content">
                  <!-- Users Navigation -->
                  <ul class="nav-items mb-0">
                    <li>
                      <a class="media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2 overlay-container overlay-bottom">
                          <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                          <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">Susan Day</div>
                          <div class="font-size-sm text-muted">Copywriter</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2 overlay-container overlay-bottom">
                          <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                          <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">Scott Young</div>
                          <div class="font-size-sm text-muted">Web Developer</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2 overlay-container overlay-bottom">
                          <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                          <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">Barbara Scott</div>
                          <div class="font-size-sm text-muted">Web Designer</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2 overlay-container overlay-bottom">
                          <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                          <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">Lori Grant</div>
                          <div class="font-size-sm text-muted">Photographer</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2 overlay-container overlay-bottom">
                          <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                          <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">Ralph Murray</div>
                          <div class="font-size-sm text-muted">Graphic Designer</div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!-- END Users Navigation -->
                </div>
              </div>
              <!-- END Online Friends -->

              <!-- Quick Settings -->
              <div class="block mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Quick Settings</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                  </div>
                </div>
                <div class="block-content">
                  <!-- Quick Settings Form -->
                  <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                      <p class="font-size-sm font-w600 mb-2">
                        Online Status
                      </p>
                      <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked>
                        <label class="custom-control-label" for="so-settings-check1">Show your status to all</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <p class="font-size-sm font-w600 mb-2">
                        Auto Updates
                      </p>
                      <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked>
                        <label class="custom-control-label" for="so-settings-check2">Keep up to date</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <p class="font-size-sm font-w600 mb-1">
                        Application Alerts
                      </p>
                      <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>
                        <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                      </div>
                      <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>
                        <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <p class="font-size-sm font-w600 mb-1">
                        API
                      </p>
                      <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked>
                        <label class="custom-control-label" for="so-settings-check5">Enable access</label>
                      </div>
                    </div>
                  </form>
                  <!-- END Quick Settings Form -->
                </div>
              </div>
              <!-- END Quick Settings -->
            </div>
            <!-- END Overview Tab -->

            <!-- Sales Tab -->
            <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
              <div class="block mb-0">
                <!-- Stats -->
                <div class="block-content">
                  <div class="row items-push pull-t">
                    <div class="col-6">
                      <div class="font-size-sm font-w600 text-uppercase">Sales</div>
                      <a class="font-size-lg" href="javascript:void(0)">22.030</a>
                    </div>
                    <div class="col-6">
                      <div class="font-size-sm font-w600 text-uppercase">Balance</div>
                      <a class="font-size-lg" href="javascript:void(0)">$4.589,00</a>
                    </div>
                  </div>
                </div>
                <!-- END Stats -->

                <!-- Today -->
                <div class="block-content block-content-full block-content-sm bg-body-light">
                  <div class="row">
                    <div class="col-6">
                      <span class="font-size-sm font-w600 text-uppercase">Today</span>
                    </div>
                    <div class="col-6 text-right">
                      <span class="ext-muted">$996</span>
                    </div>
                  </div>
                </div>
                <div class="block-content">
                  <ul class="nav-items push">
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $249</div>
                          <small class="text-muted">3 min ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $129</div>
                          <small class="text-muted">50 min ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $119</div>
                          <small class="text-muted">2 hours ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $499</div>
                          <small class="text-muted">3 hours ago</small>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- END Today -->

                <!-- Yesterday -->
                <div class="block-content block-content-full block-content-sm bg-body-light">
                  <div class="row">
                    <div class="col-6">
                      <span class="font-size-sm font-w600 text-uppercase">Yesterday</span>
                    </div>
                    <div class="col-6 text-right">
                      <span class="text-muted">$765</span>
                    </div>
                  </div>
                </div>
                <div class="block-content">
                  <ul class="nav-items push">
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $249</div>
                          <small class="text-muted">26 hours ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-danger"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">Product Purchase - $50</div>
                          <small class="text-muted">28 hours ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $119</div>
                          <small class="text-muted">29 hours ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-danger"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">Paypal Withdrawal - $300</div>
                          <small class="text-muted">37 hours ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $129</div>
                          <small class="text-muted">39 hours ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $119</div>
                          <small class="text-muted">45 hours ago</small>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="text-dark media py-2" href="javascript:void(0)">
                        <div class="mr-3 ml-2">
                          <i class="fa fa-fw fa-circle text-success"></i>
                        </div>
                        <div class="media-body">
                          <div class="font-w600">New sale! + $499</div>
                          <small class="text-muted">46 hours ago</small>
                        </div>
                      </a>
                    </li>
                  </ul>

                  <!-- More -->
                  <div class="text-center">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                      <i class="fa fa-arrow-down mr-1"></i> Load More..
                    </a>
                  </div>
                  <!-- END More -->
                </div>
                <!-- END Yesterday -->
              </div>
            </div>
            <!-- END Sales Tab -->
          </div>
        </div>
        <!-- END Side Overlay Tabs -->
      </div>
      <!-- END Side Content -->
    </aside>

    <nav id="sidebar" aria-label="Main Navigation">
      <!-- Side Header -->
      <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="#">
          <span class="smini-visible">
            <i class="fa fa-circle-notch text-primary"></i>
          </span>
          <span class="smini-hide font-size-h5 tracking-wider">
            Vyumba<span class="font-w400"> Solution</span>
          </span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>
          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
            <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
          <ul class="nav-main">
            <li class="nav-main-item">
              <a class="nav-main-link active" href="#">
                <i class="nav-main-link-icon si si-speedometer text-info"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </a>
            </li>

            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-layers"></i>
                <span class="nav-main-link-name">Page Packs</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-bag"></i>
                    <span class="nav-main-link-name">e-Commerce</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                        <span class="nav-main-link-name">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_orders.html">
                        <span class="nav-main-link-name">Orders</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_order.html">
                        <span class="nav-main-link-name">Order</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_products.html">
                        <span class="nav-main-link-name">Products</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                        <span class="nav-main-link-name">Product Edit</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_customer.html">
                        <span class="nav-main-link-name">Customer</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-handbag"></i>
                    <span class="nav-main-link-name">e-Commerce Store</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_store_home.html">
                        <span class="nav-main-link-name">Home</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_store_search.html">
                        <span class="nav-main-link-name">Search Results</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_store_products.html">
                        <span class="nav-main-link-name">Products List</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_store_product.html">
                        <span class="nav-main-link-name">Product Page</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_ecom_store_checkout.html">
                        <span class="nav-main-link-name">Checkout</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-main-heading">User Interface</li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">Blocks</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-badge"></i>
                <span class="nav-main-link-name">Elements</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_ui_grid.html">
                    <span class="nav-main-link-name">Grid</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_ui_typography.html">
                    <span class="nav-main-link-name">Typography</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-main-heading">Develop</li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-wrench"></i>
                <span class="nav-main-link-name">Components</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_comp_loaders.html">
                    <span class="nav-main-link-name">Loaders</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_comp_image_cropper.html">
                    <span class="nav-main-link-name">Image Cropper</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-magic-wand"></i>
                <span class="nav-main-link-name">Layout</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Page</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_page_default.html">
                        <span class="nav-main-link-name">Default</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_page_flipped.html">
                        <span class="nav-main-link-name">Flipped</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                        <span class="nav-main-link-name">Native Scrolling</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Main Content</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                        <span class="nav-main-link-name">Full Width</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                        <span class="nav-main-link-name">Narrow</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                        <span class="nav-main-link-name">Boxed</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-main-heading">Pages</li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-lock text-success"></i>
                <span class="nav-main-link-name">Authentication</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_pages_auth_all.html">
                    <span class="nav-main-link-name">All</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="op_auth_reminder.html">
                    <span class="nav-main-link-name">Pass Reminder</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-main-item">
              <a class="nav-main-link" href="javascript:void(0)">
              <i class="nav-main-link-icon fa fa-sign-out-alt text-danger"></i>
                <span class="nav-main-link-name">Logout</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->