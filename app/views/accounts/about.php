<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>My Properties</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Properties</li>
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


		<!-- Widget -->
		<div class="col-md-4">
			<div class="sidebar left">

				<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
						<li><a href="my-profile.html" class="current"><i class="sl sl-icon-user"></i> My Profile</a></li>
						<li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmarked Listings</a></li>
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
						<li><a href="submit-property.html"><i class="sl sl-icon-action-redo"></i> Submit New Property</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="change-password.html"><i class="sl sl-icon-lock"></i> Change Password</a></li>
						<li><a href="#"><i class="sl sl-icon-power"></i> Log Out</a></li>
					</ul>

				</div>

			</div>
		</div>

		<div class="col-md-8">
			<table class="manage-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Upload Date & Time</th>
					<th></th>
				</tr>
 						 <?php foreach($data['my_listings'] as $property) : ?>
				<!-- Item #1 -->
				<tr>
					<td class="title-container">
						<img src="uploads/" alt="">
						<div class="title">
							<h4><a href="property.php?pro=<?php echo $property->ref_id; ?>"><?php echo $property->title; ?></a></h4>
							<span><?php echo $property->address; ?>, <?php echo $property->lga; ?>, <?php echo $property->state; ?> </span>
							<span class="table-property-price">₦<?php  echo number_format($property->price).""; ?></span> 
							<span class="table-property-price">For <?php echo $property->purpose; ?></span> 

						<?php   
							if ($property->status  == 1){
                                echo '<span class="table-property-price " style="background: lightgreen;"><span style="color: white">Active</span></span>';
                                            }
                                            ?>

                                            <?php

                                                if ($property->status == 0){
                                                echo '<span class="table-property-price " style="background: red;"><span style="color: white">Under Review</span></span>';
                                            }
                                            ?>
 



							
						</div>
					</td>
					<td class="expire-date"><?php echo $property->upload_date; ?></td>
					<td class="action">
						<a href="edit-property.php?id=<?php echo $property->ref_id; ?>"><i class="fa fa-pencil"></i> Edit</a>
						<a href="edit-pictures.php?pro=<?php echo $property->ref_id; ?>"><i class="fa fa-image"></i> Edit Pictures</a>
						<a href="core/delete_pro.php?del_pro=<?php echo $property->ref_id; ?>" class="delete"  onclick="return confirm('Are you sure you want to DELETE PROPERTY ?')"  data-type="confirm" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

			 <?php endforeach; ?>


			</table>
			<a href="submit-property.php" class="margin-top-40 button">Submit New Property</a>
		</div>

	</div>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>