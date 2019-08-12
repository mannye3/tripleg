<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
<div class="row">

	<!-- Submit Page -->
	<form method="post" action="<?php echo URLROOT; ?>/accounts/submit_property" >
	<div class="col-md-12">
		<div class="submit-page">

		<!-- Section -->
		<h3>Basic Information</h3>
		<div class="submit-section">

			<!-- Title -->
			<div class="form">

				<h5>Property Title</span>
            <input type="text" class="form-control" value="<?php echo $data['title']; ?>" name="title" id="username2"   />
			</div>
			<!-- Row -->
			<div class="row with-forms">

				<!-- Status -->
				<div class="col-md-4">
					
					<h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" data-unit="Naira" name="price" type="text">
					
				</div>
				</div>

				<!-- Type -->
				<div class="col-md-4">
					<h5>Type</h5>
					<select name="type" class="chosen-select-no-single" >
						<option label="blank"></option>		
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
				</div>

				<div class="col-md-4">
					<h5>Purpose</h5>
					<select  name="purpose" class="chosen-select-no-single" >
						<option label="blank"></option>		
						<option value="Rent">For Rent</option>
                         <option value="Sale">For Sale</option>
                          
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Row -->
			<div class="row with-forms">

				
				
				<!-- Area -->
				<div class="col-md-6">
					<h5>Bedrooms</h5>
					<select name="rooms" class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>More than 10</option>
					</select>
				</div>

				<!-- Rooms -->			
				<div class="col-md-6">
					<h5>Bathrooms</h5>
					<select name="bathrooms"  class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>More than 10</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->

		<!-- Section -->
		<h3>Location</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Address -->
				

				<!-- City -->
				<div class="col-md-6">
					<h5>State</h5>
							<select class="form-control"  name="state" id="state" onchange="change_location();">
						<?php foreach($data['load_state'] as $load_state) : ?>
							<option value="<?php echo $load_state->name; ?>"><?php echo $load_state->name; ?></option>
							<?php endforeach; ?>
						</select>
				</div>

				

				<!-- City -->
				<div class="col-md-6">
					<h5>City</h5>
					<input type="text" class="form-control" name="lga">
					 <!-- <select  name="lga" id="city" class="form-control" name="choose-state">
                          <option><?php echo $row['lga'] ?></option>
                              </select> -->
				</div>

				<!-- Zip-Code -->

				<div class="col-md-12">
					<h5>Address</h5>
					
					<input  type="text"  onFocus="initializeAutocomplete()" id="locality"  name="address" >
                    <input type="" name="latitude" id="latitude" placeholder="Latitude" value="" >
                     <input type="" name="longitude" id="longitude" placeholder="Longitude" value="" >
                      <input type="" name="city" id="city" placeholder="City" value="" >
				</div>
				

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Detailed Information</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Description</h5>
				<textarea name="editor1"></textarea>
                                        <script>
                                                CKEDITOR.replace( 'editor1' );
                                        </script>
			</div>

		

		</div>
		<!-- Section / End -->

		<!-- Section -->
		


		<div class="divider"></div>
		<button name="sub-pro" type="submit" class="button preview margin-top-5">Submit <i class="fa fa-arrow-circle-right"></i></button>

		</div>
	</div>
	</form>

</div>
</div>


<script type="text/javascript">
  function initializeAutocomplete(){
    var input = document.getElementById('locality');
    // var options = {
    //   types: ['(regions)'],
    //   componentRestrictions: {country: "IN"}
    // };
    var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      // to set city name, using the locality param
      var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("city").value = val;
        }
      }
      document.getElementById("latitude").value = lat;
      document.getElementById("longitude").value = lng;
      document.getElementById("location_id").value = placeId;
    });
  }
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec&libraries=places&callback=initAutocomplete"
        async defer>

   



<?php require APPROOT . '/views/inc/footer.php'; ?>