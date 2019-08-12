<?php require APPROOT . '/views/inc/header.php'; ?>

	





                              <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select name="state" id="state" class="input-text" data-live-search="true" data-live-search-placeholder="Search value">
                                        
                                    </select>
                                </div> 
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label>LGA</label>
                                    <select name="lga" id="lga" class="input-text" data-live-search="true" data-live-search-placeholder="Search value">
                                        
                                    </select>
                                </div>
                            </div>
                        </div>





<script type="text/javascript">
    $("#state").load("<?php echo URLROOT;?>javascriptuses/statelga");
    $("#lga").load("<?php echo URLROOT;?>javascriptuses/getlga/ABIA");
    
    $("#state").change(function() {
       $("#lga").load("<?php echo URLROOT;?>javascriptuses/getlga/" + $("#state").val());
    });
  </script>







      <script> 
function change_location()
{
    var state = $("#state").val();
    
       $.ajax({
        type: "POST",
        url: "<?php echo URLROOT; ?>/javascriptuses/getlga/<?php echo $load_state->state_id; ?>",
        data: "state="+state,
        cache: false,
        success: function(response)
            {
                    alert(response);return false;
                 // $("#city").html(response);
            }
            });
    
}
</script>



<?php require APPROOT . '/views/inc/footer.php'; ?>
		



