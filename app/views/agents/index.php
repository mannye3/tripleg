<?php require APPROOT . '/views/inc/header.php'; ?>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2><?php echo $data['agent']->name; ?></h2>
				<span><?php echo $data['agent']->location; ?></span>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Listings</li>
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

		<div class="col-md-12">
			<div class="agent agent-page">

				<div class="agent-avatar">
					<?php
									$image	=	$data['agent']->image;; 
								  if ($image ==""){
								   echo '<img src="'.URLROOT.'/images/user.jpg" />';
								   }  


								   elseif ($image !=="") {

								   	 echo '<img src="'.URLROOT.'/profile_pic/'.$image.'">';
								     	
								     }  


								?>
					
				</div>

				<div class="agent-content">
					<div class="agent-name">
						<h4><?php echo $data['agent']->name; ?></h4>
						<span><?php echo $data['agent']->location; ?></span>
					</div>

					<p><?php echo $data['agent']->about; ?></p>

					<ul class="agent-contact-details">
						<li><i class="sl sl-icon-call-in"></i><?php echo $data['agent']->phone; ?></li>
						<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__"><?php echo $data['agent']->email; ?></span></a></li>
					</ul>

					
					<div class="clearfix"></div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-lg-8 col-md-8">

			<h4 class="headline">Agent Properties</h4>

			
			
			<div class="listings-container list-layout">
				 <?php foreach($data['agent_pro'] as $agent_pro) : ?>
				 	<?php foreach($data['pro_pictures'] as $pro_pictures) : ?>

				 		<?php if($agent_pro->ref_id == $pro_pictures->ref_id) : ?>
				<!-- Listing Item -->
				<div class="listing-item">

					<a href="<?php echo URLROOT; ?>/listings/<?php echo $agent_pro->ref_id; ?>" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured"><b>For <?php echo $agent_pro->purpose; ?></b></span>
							
						</div>


						<!-- <div class="listing-badges2">
							<span class="featured"><img style="width: 170px;" src="images/watermark.png" ></span>
							
						</div> -->

						<div class="listing-img-content">
							<span class="listing-price">₦<?php  echo number_format($agent_pro->price).""; ?></span>
							<span  style="float: right;"><?php echo $pro_pictures->TotalCountImg; ?> <i class="fa fa-image"></i></span>
						</div>

						<img src="<?php echo URLROOT; ?>/pro_pics/<?php echo $agent_pro->pic; ?>" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="<?php echo URLROOT; ?>/listings/<?php echo $agent_pro->ref_id; ?>"><?php echo $agent_pro->title; ?></a></h4>
							
								<i class="fa fa-map-marker"></i>
								<?php echo $agent_pro->address; ?>. <?php echo $agent_pro->lga; ?>, <?php echo $agent_pro->state; ?>
							</a>

							<a href="<?php echo URLROOT; ?>/listings/<?php echo $agent_pro->ref_id; ?>" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							
							<li><?php echo $agent_pro->rooms; ?> Bedroom</li>
							<li><?php echo $agent_pro->bathrooms; ?> Bathroms</li>

							<li>Type : <?php echo $agent_pro->type; ?> </li>							
						</ul>

						<div class="listing-footer">
							<!-- <a href="#"><i class="fa fa-user"></i> Chester Miller</a> -->
							<span><i class="fa fa-eye"></i><?php echo $agent_pro->view; ?> views</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->
				<?php endif; ?>
					<?php endforeach; ?>
				<?php endforeach; ?>

			</div>
			<!-- Listings Container / End -->

			
		

		</div>


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-4">
			<div class="sidebar sticky right">

			
				<!-- Widget -->
				
				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-35">Featured Properties</h3>

					<div class="listing-carousel outer">
						<!-- Item -->


				<?php foreach($data['feat_pro'] as $feat_pro) : ?>

						<div class="item">
							<div class="listing-item compact">

						<a href="property.php?pro=<?php echo $row_fea_pro["property_no"]; ?>" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">For <?php echo $feat_pro->purpose; ?></span>
								
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title"><?php echo $feat_pro->title; ?> <i>₦<?php  echo number_format($feat_pro->price).""; ?></i></span>
								

								<ul class="listing-hidden-content">
									
									<li>Bedroom <span><?php echo $feat_pro->rooms; ?></span></li>
									<li>Bathroom <span><?php echo $feat_pro->bathrooms; ?></span></li>
									<li>Type <span><?php echo $feat_pro->type; ?></span></li>
									
								</ul>
							</div>

							<img width="333" height="222" src="<?php echo URLROOT; ?>/pro_pics/<?php echo $feat_pro->pic; ?>" alt="">
						</a>

					</div>
						</div>
						<!-- Item / End -->

						
				<?php endforeach; ?>
					</div>

				</div>
				<!-- Widget / End -->


			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>