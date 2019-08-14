<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Breadcrumb -->
    <div class="breadcrumb-area" data-bgimage="assets/images/bg/breadcrumb-bg-01.jpg" data-black-overlay="4">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Forget Password </h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item"><a href="">login</a></li>
                            <li class="breadcrumb-item active">Forget Password </li>
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
                            <div class="login-register-tab-list">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> Forget Password </h4>
                                </a>
                                
                            </div>
                            <!-- login-register-tab-list end -->
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <div class="login-input-box">
                                                    <input type="email" name="user-name" placeholder="Email">
                                                  
                                                </div>
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                       
                                                        <a href="<?php echo URLROOT; ?>users/login">You remember your password? Login</a>
                                                    </div>
                                                    <div class="button-box">
                                                        <button class="login-btn btn" type="submit"><span>Submit</span></button>
                                                    </div>
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

<?php require APPROOT . '/views/inc/footer.php'; ?>