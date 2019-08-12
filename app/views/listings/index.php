<?php require APPROOT . '/views/inc/header.php'; ?>
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				
				<div class="property-title">
					<h2><?php echo $data['post']->title; ?><span class="property-badge">For <?php echo $data['post']->purpose; ?></span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							<?php echo $data['post']->address; ?>, <?php echo $data['post']->lga; ?>, <?php echo $data['post']->state; ?>
						</a>
					</span>  
				</div>

				<div class="property-pricing">
					<div class="property-price">₦<?php echo number_format($data['post']->price); ?></div>
					
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
		
			<!-- Slider -->
			<div class="property-slider default">
				 <?php foreach($data['pro_pics'] as $pro_pics) : ?>
				<img src="<?php echo URLROOT; ?>/pro_pics/<?php echo $pro_pics->pic; ?>"  class="item mfp-gallery"></a>
				<!-- <div class="listing-badges3">
							<span class="featured"><img style="width: 300px;" src="<?php echo URLROOT; ?>/public/images/watermark.png" ></span>
							
						</div> -->
				 <?php endforeach; ?>
				
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				<?php foreach($data['pro_pics'] as $pro_pics) : ?>
				<div class="item"><img width="168" height="109" src="<?php echo URLROOT; ?>/pro_pics/<?php echo $pro_pics->pic; ?>"  alt=""></div>

				 <?php endforeach; ?>
				
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Bedrooms <span><?php echo $data['post']->rooms; ?></span></li>
					<li>Bathrooms <span><?php echo $data['post']->bathrooms; ?></span></li>
					<li>Property Type <span><?php echo $data['post']->type; ?></span></li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						
					</p>

					<?php echo $data['post']->details; ?>
					</p>

					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>

				<!-- Details -->
				
				

				
				<!-- Location -->
				<h3 class="desc-headline no-border" id="location">Location</h3>
				<div id="propertyMap-container">
					<div id="propertyMap" data-latitude="<?php echo $row_pro_d["latitude"] ?>" data-longitude="<?php echo $row_pro_d["longitude"] ?>"></div>
					<a href="#" id="streetView">Street View</a>


					</div>


				<!-- Similar Listings Container -->
				

			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">

				
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="images/user.jpg" alt="" /></div>
							<div class="agent-details">
								<h4><a href="agent.php?agent=<?php echo $row_pro_d["user_code"]; ?>"><?php echo $row_pro_d["fullname"] ?></a></h4>
								<span><i class="sl sl-icon-call-in"></i>+2349073627352 </span>
							</div>
							<div class="clearfix"></div>
						</div>
							<?php echo $alert; ?>
							<form method="post">

						<input name="email" type="text" placeholder="Your Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
						<input type="text" name="phone" placeholder="Your Phone">
						<textarea name="message" placeholder="Message"></textarea>
						<button class="button fullwidth margin-top-5" type="submit" name="enquiry">Send Message</button>
						</form>
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->


				


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
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec"></script>
<script>


<?php require APPROOT . '/views/inc/footer.php'; ?>