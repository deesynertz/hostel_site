<?php include_once('../shared/metadata-head.php'); ?>
<?php require_once('scripts/authentication.php'); ?>


<!-- Page Content -->
<div class="hero-static d-flex align-items-center">
  <div class="w-100">

    <!-- Reminder Section -->
    <div class="bg-white">
      <div class="content content-full">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-4 py-4">
            <!-- Header -->
            <div class="text-center">
              <p class="mb-2">
                <i class="fa fa-2x fa-circle-notch text-primary"></i>
              </p>
              <h1 class="h4 mb-1">
                Password Reminder
              </h1>
              <h2 class="h6 font-w400 text-muted mb-3">
                Please provide your account’s email and we will send you your password.
              </h2>
            </div>
            <!-- END Header -->

            <!-- Reminder Form -->

            <form class="js-validation" action="reset_link_email.php" method="POST">
              <div class="form-group py-3">
                <input type="email" class="form-control form-control-lg form-control-alt" id="email" name="email" placeholder="Your Account Email">
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-12">
                  <button type="submit" class="btn btn-block btn-warning">
                    <i class="fa fa-fw fa-envelope mr-1"></i> Send Mail
                  </button>
                </div>
              </div>
            </form>
            <!-- END Reminder Form -->

            <div class="text-center">
              <a class="font-size-sm font-w500" href="login">Login?</a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- END Reminder Section -->

    <?php include_once('../shared/footer.php'); ?>

  </div>
</div>

<?php include_once('../shared/metadata-footer.php'); ?>