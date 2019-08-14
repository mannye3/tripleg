<?php require APPROOT . '/views/inc/header.php'; ?>


 <!-- Breadcrumb -->
    <div class="breadcrumb-area" data-bgimage="assets/images/bg/breadcrumb-bg-01.jpg" data-black-overlay="4">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Register </h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Register </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    
    
    
    <!-- Page Conttent -->
    <main class="page-content">
       
        <div class="register-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <!-- login-register-tab-list start -->
                            <div class="login-register-tab-list ">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> register </h4>
                                </a>
                                <a href="<?php echo URLROOT; ?>users/login">
                                    <h4> login </h4>
                                </a>
                            </div>
                            <!-- login-register-tab-list end -->
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <div class="login-input-box">
                                                    <input type="text" name="user-name" placeholder="User Name">
                                                    <input type="password" name="user-password" placeholder="Password">
                                                    <input name="user-email" placeholder="Email" type="email">
                                                </div>
                                                <div class="button-box">
                                                    <button class="register-btn btn" type="submit"><span>Register</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <!--// Page Conttent -->
  
  <!-- <div class="container">

  <div class="row">
  <div class="col-md-4 col-md-offset-4">


  <div class="my-account style-1 margin-top-5 margin-bottom-40">
      <?php flash('register_success'); ?>
      <br>
    <ul class="tabs-nav">
      <li class=""><a href="<?php echo URLROOT; ?>/users/login"> Login</a></li>
       <li class=""><a href="<?php echo URLROOT; ?>/users/register"> Register</a></li>
    </ul>
    <div class="tabs-container alt">

     
      <div class="tab-content" id="tab1" style="display: none;">
       <form method="post" action="<?php echo URLROOT; ?>/users/login"  class="register">
      
          
        <p class="form-row form-row-wide">
          <label for="email2">Email Address: 
           <br>
        <p style=" color: red;"><?php echo $data['email_err']; ?></p>
       
            <input type="text" class="input-text  <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" name="email" id="email2" required  />
             
          </label>
        </p>


        <p class="form-row form-row-wide">
          <label for="email2">Password: 
            <br>
            <p style=" color: red;"><?php echo $data['password_err']; ?></p>
            <input type="password" class="input-text  <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" id="email2" required  />
             
          </label>
        </p>
       

          <p class="lost_password">
            <a href="<?php echo URLROOT; ?>/users/forget_password">Lost Your Password?</a>
          </p>

  
  
        <p class="form-row">
          <input type="submit"  class="button border fw margin-top-10"  value="Login" />
        </p>

        </form>
      </div>

     

    </div>
  </div>



  </div>
  </div>

</div> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>



<!-- <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Create An Account</h2>
        <p>Please fill out this form to register with us</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> -->