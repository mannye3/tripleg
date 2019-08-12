<?php

	foreach($data['state'] as $state) : 

		echo '<option value="' . $state->state . '">' . $state->state . '</option>';

	endforeach;
?>