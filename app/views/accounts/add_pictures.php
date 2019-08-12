<?php require APPROOT . '/views/inc/header.php'; 


 ?>




<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Add Property Pictures</h2>
			</div>
		</div>
	</div>
</div>

<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">

		
		<!-- Section -->
		
        <!-- <form method="post" action="<?php echo URLROOT; ?>/accounts/add_pictures/" enctype="multipart/form-data">
<input type="file" name="file" multiple="multiple" >
<p align="center"><button type="submit" class="btn btn-warning" id="butsave" name="submit">Submit<span class="glyphicon glyphicon-send"></span></button></p>
</form> --> 


		 <form action="<?php echo URLROOT; ?>/accounts/add_pictures/<?php echo $ref_id; ?>" class="dropzone" id="myAwesomeDropzone"> 
            </form> 
		<!-- Section / End -->

		<div class="divider"></div>
        <a href="<?php echo URLROOT; ?>/accounts/feat_picture/<?php echo $_SESSION['ref_id']; ?>">
		<button class="button preview margin-top-5">Continue <i class="fa fa-arrow-circle-right"></i></button></a>
        

		</div>
	</div>

</div>
</div>
  <!-- Script -->
        <!-- <script type='text/javascript'>
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) { 
                var name = file.name;    
                
                $.ajax({
                    type: 'POST',
                    url: '<?php echo URLROOT; ?>/accounts/add_pictures',
                    data: {name: name,request: 2},
                    sucess: function(data){
                        console.log('success: ' + data);
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
        </script> -->


        <?php require APPROOT . '/views/inc/footer.php'; ?>