<?php require APPROOT . '/views/inc/header.php';?>


<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="images/place.jpg"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row_sear_pro">
				<div class="col-md-12">

					<h2>Listings</h2>
					<span><?php echo $data['listing_num_rows']->TotalCount;  ?> Properties found for <?php echo $data['location'];  ?></span>
					
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
</div>



<div class="container">
	<div class="row_sear_pro sticky-wrapper">

		<div class="col-md-8">

			<!-- Main Search Input -->
			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->

				<?php flash('post_message'); ?>
				 <?php foreach($data['listing_search'] as $listing_search) : ?>
				<div class="listing-item">

					<a href="<?php echo URLROOT; ?>/listings/<?php echo $listing_search->ref_id; ?>" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">For <?php echo $listing_search->purpose; ?></span>
							
						</div>

						<!-- <div class="listing-badges2">
							<span class="featured"><img style="width: 170px;" src="images/watermark.png" ></span>
							
						</div> -->

						<div class="listing-img-content">
							<span class="listing-price">₦<?php echo $listing_search->price; ?></span>  

							<!-- <span  style="float: right;"><?php echo $t_img ?> <i class="fa fa-image"></i></span> -->
							
							
						</div>

						<img src="<?php echo URLROOT; ?>/pro_pics/<?php echo $listing_search->pic; ?>" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="<?php echo URLROOT; ?>/listings/<?php echo $listing_search->ref_id; ?>"><?php echo $listing_search->title; ?></a></h4>
							
								<i class="fa fa-map-marker"></i>
								<?php echo $listing_search->address; ?>. <?php echo $listing_search->lga; ?>, <?php echo $listing_search->state; ?>
							

							<a href="<?php echo URLROOT; ?>/listings/<?php echo $listing_search->ref_id; ?>" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							
							<li><?php echo $listing_search->rooms; ?> Bedroom</li>
							<li><?php echo $listing_search->bathrooms; ?> Bathroms</li>
							<li>Type: <?php echo $listing_search->type; ?> </li>
							
						</ul>

						<div class="listing-footer">
							<!-- <a href="#"><i class="fa fa-user"></i> Chester Miller</a> -->
							<span><i class="fa fa-eye"></i><?php echo $listing_search->view; ?> views</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
 <?php endforeach; ?>


			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
		<!-- <div class="pagination-container margin-top-20">
				<nav class="pagination pagination-next-prev">
					<ul>
						
						 <?php


						 	$per_page = 2;   // Per Page
						    $page  = 1;
						    
						    if(isset($_GET["Page"]))
						    {
						        $page = $_GET["Page"];
						    }

						    $prev_page = $page-1;
						    $next_page = $page+1;

						    $row_start = (($per_page*$page)-$per_page);
						    if($num_rows<=$per_page)
						    {
						        $num_pages =1;
						    }
						    else if(($num_rows % $per_page)==0)
						    {
						        $num_pages =($num_rows/$per_page) ;
						    }
						    else
						    {
						        $num_pages =($num_rows/$per_page)+1;
						        $num_pages = (int)$num_pages;
						    }
						    $row_end = $per_page * $page;
						    if($row_end > $num_rows)
						    {
						        $row_end = $num_rows;
						    }

				          if($prev_page)
				          {
				            echo "
				            <a href='".URLROOT."/searches?Page=".$prev_page."&location=".$data['location']."' class='prev'><button class='button'>Prev</button></a> ";
				          }

				          for($i=1; $i<=$num_pages; $i++){
				            if($i != $page)
				            {
				               echo "<a href='".URLROOT."/searches?Page=".$i."&location=".$data['location']."' class=''>".$i."</a>";
				            }
				            else 
				            {
				               echo "<span class='current-page'><b> ".$i." </b></span>";
				            }
				          }
				          if($page!=$num_pages)
				          {
				            echo " <a href ='".URLROOT."/searches?Page=".$next_page."&location=".$data['location']."'  class='next'><button class='button'>Next</button></a> ";
				          }
				          //$conn = null;
				        ?>
					</ul>
				</nav>

				
		</div> -->
			<!-- Pagination / End -->

			

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-md-4">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<form action="<?php echo URLROOT; ?>/searches" method="get" >
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Change Your Search</h3>

					<!-- Row_sear_pro -->
					<div class="row_sear_pro with-forms">
						<!-- Status -->
						<div class="col-md-12">
							<input type="text"  name="location" id="autocomplete" onFocus="geolocate()" placeholder="Where do you want to live?" />
						</div>
					</div>
					<!-- Row_sear_pro / End -->


					<!-- Row_sear_pro -->
					<div class="row_sear_pro with-forms">
						<!-- Type -->
						<!-- <div class="col-md-12"> -->
						<!-- <select data-placeholder="Any Type" name="type" class="chosen-select-no-single" >
								<option value="Bungalow">Bungalow</option>
		                         <option value="Duplex">Duplex</option>
		                          <option value="Flat">Flat</option>
		                           <option value="House">House</option>
		                            <option value="Industrial Building">Industrial Building</option>
		                             <option value="Office">Office Space</option>
		                              <option value="Land">Land</option>
		                              <option value="Shop">Shop/Showroom</option>
		                              <option value="Store Room">Store Room</option>
		                            <option value="Warehouse">Warehouse</option>	
								</select>
													</div> -->
					<!-- </div> -->
					<!-- Row_sear_pro / End -->

					<button class="button fullwidth margin-top-30" type="submit" name="search">Search</button>
				</div>
			</form>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>