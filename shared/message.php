<?php if (!empty($successMessage)) : ?>
<div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
  <div class="flex-fill mr-3">
    <p class="mb-0"><strong><a class="alert-link" href="javascript:void(0)">[SUCCESS]:</a>
    </strong><?php echo $successMessage; ?>
      <!-- <a class="alert-link" href="javascript:void(0)">updated</a> to v4.8! -->
    </p>
  </div>
  <div class="flex-00-auto">
    <i class="fa fa-fw fa-check-circle"></i>
  </div>
</div>
<?php endif ?>

<?php if (!empty($warningMessage)) : ?>
<div class="alert alert-warning d-flex align-items-center justify-content-between" role="alert">
  <div class="flex-fill mr-3">
    <p class="mb-0"><strong><a class="alert-link" href="javascript:void(0)">[WARNING]:</a>
    </strong><?php echo $warningMessage; ?>
      <!-- <a class="alert-link" href="javascript:void(0)">updated</a> to v4.8! -->
    </p>
  </div>
  <div class="flex-00-auto">
    <i class="fa fa-fw fa-warning"></i>
  </div>
</div>
<?php endif ?>

<?php if (!empty($errorMessage)) : ?>
<div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
  <div class="flex-fill mr-3">
    <p class="mb-0"><strong><a class="alert-link" href="javascript:void(0)">[ERROR]:</a>
    </strong><?php echo $errorMessage; ?>
      <!-- updated to v4.8! -->
    </p>
  </div>
  <div class="flex-00-auto">
    <i class="fa fa-fw fa-times-circle"></i>
  </div>
</div>
<?php endif ?>

