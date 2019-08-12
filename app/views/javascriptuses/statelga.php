<?php

	foreach($data['statelgas'] as $statelgas) : 

		echo '<option value="' . $statelgas->state . '">' . $statelgas->state . '</option>';

	endforeach;
?>