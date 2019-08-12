<?php require APPROOT . '/views/inc/header.php'; ?>




<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-plus-circle"></i>Select Feature Picture</h2>
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
        <form method="post" action="<?php echo URLROOT; ?>/accounts/feat_picture/<?php echo $data['pro_img']->ref_id; ?>">
            <div class="row">

                
                <div class="agents-grid-container">

                    <!-- Agent -->

                       <?php foreach($data['pro_img'] as $pro_img) : ?>
                    <div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="agent">
                            <div class="agent-avatar">
                            
                                     <center><p><b>Select Feature Picture</b></p>  
                                        
                          <input type="radio" required value="<?php echo $pro_img->pic; ?>" class="inline img-fluid" name="pic"></center>
                                    <img style="width: 333px; height: 222px;" src="<?php echo URLROOT; ?>/pro_pics/<?php echo $pro_img->pic; ?>" heigth="100px" alt="">

                                     <center><a href="<?php echo URLROOT; ?>/accounts/delete_picture/<?php echo $pro_img->id; ?>" onclick="return confirm('Are you sure you want to DELETE PICTURE ?')"  data-type="confirm"><h4>Delete Picture</h4></a></center>
                                     <input name="ref_id" type="hidden" value="<?php echo $pro_img->ref_id; ?>">
                            </div>
                        </div>
                    </div>
                   <?php endforeach; ?>
                    <!-- Agent / End -->

                
                </div>
                <!-- Agents Container / End -->
                <div class="divider"></div>
            <center><button type="submit"  class="button preview margin-top-5">Submit <i class="fa fa-arrow-circle-right"></i></button></center>
            </div>
            </form>
            <center><a href="<?php echo URLROOT; ?>/accounts/add_pictures/<?php echo $_SESSION['ref_id']; ?>"><button class="button preview margin-top-5">Add More Pictures <i  class="fa fa-plus-circle"></i></button></a></center>
            
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