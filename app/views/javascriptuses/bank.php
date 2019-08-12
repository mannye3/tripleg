<?php

	foreach($data['banks'] as $banks) : 

		echo '<option value="' . $banks->bankname . '">' . $banks->bankname . '</option>';

	endforeach;
?>