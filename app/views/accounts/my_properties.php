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


		<!-- USER NAVBAR -->
		<?php require APPROOT . '/views/inc/user_nav.php'; ?>

		<div class="col-md-8">
			<?php flash('post_message'); ?>
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
						
						<img src="<?php echo URLROOT; ?>/pro_pics/<?php echo $property->pic; ?>" alt="">
						<div class="title">
							<h4><a href="<?php echo URLROOT; ?>/listings/<?php echo $property->ref_id; ?>"><?php echo $property->title; ?></a></h4>
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
						<a href="<?php echo URLROOT; ?>/accounts/edit_property/<?php echo $property->ref_id; ?>"><i class="fa fa-pencil"></i> Edit</a>
						<a href="<?php echo URLROOT; ?>/accounts/feat_picture/<?php echo $property->ref_id; ?>"><i class="fa fa-image"></i> Edit Pictures</a>
						<!--  <form class="pull-right" action="<?php echo URLROOT; ?>/accounts/delete_property/<?php echo $property->ref_id; ?>"  method="post" class="delete">
						 	<input type="submit" value="Delete" > -->
						 	<!-- <a href="<?php echo URLROOT ?>/accounts/delete_property/<?php echo $property->ref_id; ?>">go </a> -->
						<a href="<?php echo URLROOT; ?>/accounts/delete_property/<?php echo $property->ref_id; ?>" class="delete"  onclick="return confirm('Are you sure you want to DELETE PROPERTY ?')"  data-type="confirm" class="delete"><i class="fa fa-remove"></i> Delete</a>
					<!-- </form> -->
					</td>
				</tr>

			 <?php endforeach; ?>


			</table>
			<a href="<?php echo URLROOT; ?>/accounts/submit_property" class="margin-top-40 button">Submit New Property</a>
		</div>

	</div>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>