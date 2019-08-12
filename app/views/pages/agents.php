<?php require APPROOT . '/views/inc/header.php'; ?>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Agents</h2>
				<!-- <span>List of Our Agents</span> -->
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>Agents</li>
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
			<div class="row">

				<!-- Agents Container -->
				<div class="agents-grid-container">

			<?php foreach($data['agent_list'] as $agent_list) : ?>
					<!-- Agent -->
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="<?php echo URLROOT; ?>/agents/<?php echo $agent_list->id; ?>">
													<?php
									$image	=	$agent_list->image; 
								  if ($image ==""){
								   echo '<img src="'.URLROOT.'/images/user.jpg" />';
								   }  


								   elseif ($image !=="") {

								   	 echo '<img src="'.URLROOT.'/profile_pic/'.$image.'">';
								     	
								     }  


								?>
									<span class="view-profile-btn">View Profile</span>
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<center><h4><a href="<?php echo URLROOT; ?>/agents/<?php echo $agent_list->id; ?>"><?php echo $agent_list->name; ?></a></h4></center>
									<!-- <span>Agent In New York</span> -->
								</div>

								<!-- <ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i><?php echo $row_agent["phone"]; ?></li><br>
									<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__" data-cfemail="3c4853517c59445d514c5059125f5351"><?php echo $row_agent["email"]; ?></span></a></li>
								</ul> -->

								<!-- <ul class="social-icons">
									<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
								</ul> -->
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- Agent / End -->

					<?php endforeach; ?>


				</div>
				<!-- Agents Container / End -->
				<!-- Pagination -->
			<!-- <div class="pagination-container margin-top-20">
				<nav class="pagination">
					<?php  
                        $sql = "SELECT COUNT(id) FROM users";  
                        $rs_result = mysqli_query($con, $sql);  
                        $row = mysqli_fetch_row($rs_result);  
                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit);  
                        $pagLink = '<div class="pagination-box hidden-mb-45 text-center">
                                 <nav aria-label="Page navigation example">
                        <ul class="pagination">';  
                        for ($i=1; $i<=$total_pages; $i++) {  
                                     $pagLink .= "<li class=''><a class='current-page' href='agents.php?page=".$i."'>".$i."</a></li>";  
                        };  
                        echo $pagLink . " </ul>
                        </div>";  
                        ?>
					
			</div> -->
			<!-- Pagination / End -->

			</div>
		</div>


	</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>