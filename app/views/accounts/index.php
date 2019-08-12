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
					<?php flash('post_message'); ?>
					
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>
					<a href="<?php echo URLROOT; ?>/accounts/edit_profile"><p style="float: right; size: 10px;"><i class="fa fa-edit"></i> Edit Profile</p></a>

					<label>Your Name</label>
					<input value="<?php echo $_SESSION['user_name']; ?>" name="name" readonly>

					<label>Phone</label>
					<input value="<?php echo $_SESSION['user_phone']; ?>" readonly>

					<label>Email</label>
					<input value="<?php echo $_SESSION['user_email']; ?>" readonly>


					<label>Email</label>
					<input value="<?php echo $_SESSION['user_image']; ?>" readonly>


					<h4 class="margin-top-50 margin-bottom-25">About Me</h4>
					<textarea name="about" id="about" cols="30" readonly rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
				

					<!-- <h4 class="margin-top-50 margin-bottom-0">Social</h4>

					<label><i class="fa fa-twitter"></i> Twitter</label>
					<input value="https://www.twitter.com/" type="text">

					<label><i class="fa fa-facebook-square"></i> Facebook</label>
					<input value="https://www.facebook.com/" type="text">

					<label><i class="fa fa-google-plus"></i> Google+</label>
					<input value="https://www.google.com/" type="text">

					<label><i class="fa fa-linkedin"></i> Linkedin</label>
					<input value="https://www.linkedin.com/" type="text">
 -->

					<a href="<?php echo URLROOT; ?>/accounts/edit_profile"><button class="button margin-top-20 margin-bottom-20"><i class="fa fa-edit"> Edit Profile</i></button></a>
				</div>
				


				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<?php
					$image	=	$_SESSION['user_image']; 
				  if ($image ==""){
				   echo '<img src="'.URLROOT.'/images/user.jpg" />';
				   }  


				   elseif ($image !=="") {

				   	 echo '<img style="height: 120px; width: 120px;" src="'.URLROOT.'/profile_pic/'.$image.'">';
				     	
				     }  


				?>
						
						
 				 </div>
						<div class="change-photo-btn">
							<div class="photoUpload">
								<span id="uploaded_image"></span>
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <center><input type="file" id="file" class="upload" /></center>
							   
							</div>
						</div>
					</div>


				


			</div>
		</div>

	</div>
</div>



<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"<?php echo URLROOT; ?>/accounts/profile_pic",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
</script>




<?php require APPROOT . '/views/inc/footer.php'; ?>