
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="user" method="post" action="<?= base_url('auth/register') ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Name" value="<?= set_value ('name'); ?>">
                    <?= form_error('name', 'small class="text-danger pl-3">','</small>'); ?>
                  </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value ('username'); ?>">
                    <?= form_error('username', 'small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value ('email'); ?>">
                    <?= form_error('email', 'small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', 'small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  <div class="form-group btn-container">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-block font-weight-medium auth-form-btn"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="<?= base_url('auth') ?>" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>