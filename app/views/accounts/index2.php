<?php require APPROOT . '/views/inc/header.php'; ?>







<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>My Profile</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Profile</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<!-- USER NAVBAR -->
		<?php require APPROOT . '/views/inc/user_nav.php'; ?>

		<div class="col-md-8">
			<div class="row">


				<div class="col-md-8 my-profile">
					<form method="post" action="<?php echo URLROOT; ?>/accounts/index2" >
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

					<label>Your Name</label>
					<input value="<?php echo $_SESSION['user_name']; ?>" name="name"  type="text">

					<label>Your Title</label>

					<input value="<?php echo $_SESSION['user_id']; ?>" name="user_id" type="text">

					<label>Phone</label>
					<input value="<?php echo $_SESSION['user_phone']; ?>" name="phone" type="text">

					<label>Email</label>
					<input value="<?php echo $_SESSION['user_email']; ?>" type="email">


					<h4 class="margin-top-50 margin-bottom-25">About Me</h4>
					<textarea name="about" id="about" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
				

					<h4 class="margin-top-50 margin-bottom-0">Social</h4>

					<label><i class="fa fa-twitter"></i> Twitter</label>
					<input value="https://www.twitter.com/" type="text">

					<label><i class="fa fa-facebook-square"></i> Facebook</label>
					<input value="https://www.facebook.com/" type="text">

					<label><i class="fa fa-google-plus"></i> Google+</label>
					<input value="https://www.google.com/" type="text">

					<label><i class="fa fa-linkedin"></i> Linkedin</label>
					<input value="https://www.linkedin.com/" type="text">


					<button type="submit" class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>
				</form>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="<?php echo URLROOT; ?>/images/agent-02.jpg" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
</div>








<?php require APPROOT . '/views/inc/footer.php'; ?>