<?php require APPROOT . '/views/inc/header.php'; ?>

    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area" data-bgimage="assets/images/bg/breadcrumb-bg-01.jpg" data-black-overlay="4">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>My Account</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">My Account</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    
    
    
    <!-- Page Conttent -->
    <main class="page-content section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="account-dashboard">
                        <div class="dashboard-upper-info">
                           <div class="row align-items-center no-gutters">
                               <div class="col-lg-3 col-md-12">
                                   <div class="d-single-info">
                                       <p class="user-name">Hello <span>Yourmail@info</span></p>
                                       <p>(not yourmail@info? <a href="#">Log Out</a>)</p>
                                   </div>
                               </div>
                               <div class="col-lg-4 col-md-12">
                                   <div class="d-single-info">
                                       <p>Need Assistance? Customer service at.</p>
                                       <p>admin@devitems.com.</p>
                                   </div>
                               </div>
                               <div class="col-lg-3 col-md-12">
                                   <div class="d-single-info">
                                       <p>E-mail them at </p>
                                       <p>support@yoursite.com</p>
                                   </div>
                               </div>
                               <div class="col-lg-2 col-md-12">
                                   <div class="d-single-info text-lg-center">
                                       <a href="cart.html" class="view-cart"><i class="fa fa-cart-plus"></i>view cart</a>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                            <?php require APPROOT . '/views/inc/user_nav.php'; ?>
                            <div class="col-md-12 col-lg-10">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane active" id="dashboard">
                                         <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="assets/images/courses/courses-01.jpg" alt=""></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Department of Science.</h5>
                               
                                <p>Contrary to popular belief, Lorem Ipsum isnotimply random text..</p>
                                <div class="button-block">
                                    <a href="course-details.html" class="botton-border">apply now</a>
                                </div>
                            </div>
                        </div><!--// single-courses -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="assets/images/courses/courses-02.jpg" alt=""></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Banking Courses.</h5>
                               
                                <p>Contrary to popular belief, Lorem Ipsum isnotimply random text..</p>
                                <div class="button-block">
                                    <a href="course-details.html" class="botton-border">apply now</a>
                                </div>
                            </div>
                        </div><!--// single-courses -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="assets/images/courses/courses-03.jpg" alt=""></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Combined with a Handful.</h5>
                                
                                <p>Contrary to popular belief, Lorem Ipsum isnotimply random text..</p>
                                <div class="button-block">
                                    <a href="course-details.html" class="botton-border">apply now</a>
                                </div>
                            </div>
                        </div><!--// single-courses -->
                    </div>

                    
                </div>
                                    </div>
                                    <div class="tab-pane fade" id="price-list">
                                        <h3>Orders</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>	 	 	 	
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>May 10, 2018</td>
                                                        <td>Processing</td>
                                                        <td>$25.00 for 1 item </td>
                                                        <td><a href="cart.html" class="view">view</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>May 10, 2018</td>
                                                        <td>Processing</td>
                                                        <td>$17.00 for 1 item </td>
                                                        <td><a href="cart.html" class="view">view</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="tab-pane fade" id="account-details">
                                        <h3>Account details </h3>
                                        <div class="login">
                                            <div class="login-form-container">
                                                <div class="account-login-form">
                                                    <form action="#">
                                                        <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                        <label>Social title</label>
                                                        <div class="input-radio">
                                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                        </div>
                                                        <div class="account-input-box">
                                                            <label>First Name</label>
                                                            <input type="text" name="first-name">
                                                            <label>Last Name</label>
                                                            <input type="text" name="last-name">
                                                            <label>Email</label>
                                                            <input type="text" name="email-name">
                                                            <label>Password</label>
                                                            <input type="password" name="user-password">
                                                            <label>Birthdate</label>
                                                            <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                        </div>
                                                        <div class="example">
                                                          (E.g.: 05/31/1970)
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" value="1" name="optin">
                                                            <label>Receive offers from our partners</label>
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" value="1" name="newsletter">
                                                            <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                        </div>
                                                        <div class="button-box">
                                                            <button class="btn default-btn" type="submit">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="change-password">
                                        <h3>Change Password </h3>
                                        <div class="login">
                                            <div class="login-form-container">
                                                <div class="account-login-form">
                                                    <form action="#">
                                                        
                                                        
                                                        <div class="account-input-box">
                                                            <label>Current Password</label>
                                                            <input type="password" name="first-name">
                                                            <label>New Password</label>
                                                            <input type="password" name="last-name">
                                                            <label>Confirm Password</label>
                                                            <input type="password" name="email-name">
                                                            
                                                        </div>
                                                       
                                                        <div class="button-box">
                                                            <button class="btn default-btn" type="submit">Save</button>
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
            </div>
        </div>
    </main>
    <!--// Page Conttent -->

<?php require APPROOT . '/views/inc/footer.php'; ?>