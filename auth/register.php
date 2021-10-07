<?php include_once('../shared/metadata-head.php'); ?>
<?php require_once('scripts/authentication.php'); ?>


<div class="hero-static d-flex align-items-center">
  <div class="w-100">
    
    <!-- Sign Up Section -->
    <div class="bg-white">
      <div class="content content-full">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-4 py-4">
            <!-- Header -->
            <div class="text-center">
              <p class="mb-2">
                <i class="fa fa-2x fa-circle-notch text-primary"></i>
              </p>
              <h1 class="h4  mb-1">
                Create Account
              </h1>
              <h2 class="h6 font-w400 text-muted mb-3">
                Get your access today in one easy step
              </h2>
            </div>
            <!-- END Header -->

            <form class="js-validation" action="register" method="POST">
              <div class="py-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg form-control-alt" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg form-control-alt" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg form-control-alt" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg form-control-alt" id="password-confirm" name="password-confirm" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <div class="d-md-flex align-items-md-center justify-content-md-between">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="terms" name="terms">
                      <label class="custom-control-label font-w400" for="terms">I agree to Terms &amp; Conditions</label>
                    </div>
                    <div class="py-2">
                      <a class="font-size-sm font-w500" href="javascript:void(0)" data-toggle="modal" data-target="#one-signup-terms">View Terms</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row justify-content-center mb-0">
                <div class="col-12">
                  <button type="submit"  class="btn btn-block btn-primary">
                    <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                  </button>
                </div>
              </div>
            </form>
            <!-- END Sign Up Form -->

            <div class="text-center pt-3">
              <a class="font-size-sm font-w500" href="login">Login </a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- END Sign Up Section -->

    <?php include_once('../shared/footer.php'); ?>

  </div>
</div>

<?php include_once('../shared/metadata-footer.php'); ?>