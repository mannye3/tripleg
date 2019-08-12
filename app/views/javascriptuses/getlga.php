<?php

	foreach($data['lgas'] as $lgas) : 

		echo '<option value="' . $lgas->lga . '">' . $lgas->lga . '</option>';

	endforeach;
?>