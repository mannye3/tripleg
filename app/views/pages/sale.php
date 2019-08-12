<?php require APPROOT . '/views/inc/header.php'; ?>



<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="images/listings-parallax.jpg"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>For Sale</h2>
					<!-- <span>Grid Layout With Sidebar</span> -->
					
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Sale</li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-md-9">

		
			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				 <?php foreach($data['sale_pro'] as $sale_pro) : ?>
				 	<?php foreach($data['pro_pictures'] as $pro_pictures) : ?>

				 		<?php if($sale_pro->ref_id == $pro_pictures->ref_id) : ?>

				<div class="listing-item">

					<a href="<?php echo URLROOT; ?>/listings/<?php echo $sale_pro->ref_id; ?>" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured"><b>For <?php echo $sale_pro->purpose; ?></b></span>
							
						</div>


						<!-- <div class="listing-badges2">
							<span class="featured"><img style="width: 170px;" src="images/watermark.png" ></span>
							
						</div> -->

						<div class="listing-img-content">
							<span class="listing-price">₦<?php  echo number_format($sale_pro->price).""; ?></span>
							<span  style="float: right;"><?php echo $pro_pictures->TotalCountImg; ?> <i class="fa fa-image"></i></span>
						</div>

						<img src="<?php echo URLROOT; ?>/pro_pics/<?php echo $sale_pro->pic; ?>" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="<?php echo URLROOT; ?>/listings/<?php echo $sale_pro->ref_id; ?>"><?php echo $sale_pro->title; ?></a></h4>
							
								<i class="fa fa-map-marker"></i>
								<?php echo $sale_pro->address; ?>. <?php echo $sale_pro->lga; ?>, <?php echo $sale_pro->state; ?>
							</a>

							<a href="<?php echo URLROOT; ?>/listings/<?php echo $sale_pro->ref_id; ?>" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							
							<li><?php echo $sale_pro->rooms; ?> Bedroom</li>
							<li><?php echo $sale_pro->bathrooms; ?> Bathroms</li>

							<li>Type : <?php echo $sale_pro->type; ?> </li>							
						</ul>

						<div class="listing-footer">
							<!-- <a href="#"><i class="fa fa-user"></i> Chester Miller</a> -->
							<span><i class="fa fa-eye"></i><?php echo $sale_pro->view; ?> views</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endforeach; ?>
				<!-- Listing Item / End -->



			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
			<!-- <div class="pagination-container margin-top-20">
				<nav class="pagination">
					<?php  
                        $sql = "SELECT COUNT(id) FROM property WHERE  status=1";  
                        $rs_result = mysqli_query($con, $sql);  
                        $row = mysqli_fetch_row($rs_result);  
                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit);  
                        $pagLink = '<div class="pagination-box hidden-mb-45 text-center">
                                 <nav aria-label="Page navigation example">
                        <ul class="pagination">';  
                        for ($i=1; $i<=$total_pages; $i++) {  
                                     $pagLink .= "<li class=''><a class='current-page' href='rent.php?page=".$i."'>".$i."</a></li>";  
                        };  
                        echo $pagLink . " </ul>
                        </div>";  
                        ?>
					
			</div> -->
			<!-- Pagination / End -->

		</div>


	</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>