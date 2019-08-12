<?php

	$output[] = '<ul>
					<li class="vehicle-passenger-limit">' . $data['trip_info']->capacity . '  (capacity)</li>
					<li class="vehicle-passenger-limit">' . $data['seats_available'] . ' (available)</li>
				</ul>';

	echo join('',$output);

	/*foreach($data['commissions'] as $singlecommission) : 		

		if(($data['price'] >= $singlecommission->lowamount) && ($data['price'] <= $singlecommission->highamount)){
			echo round($singlecommission->amount);
		}
		//echo $singlecommission->lowamount . " " . $singlecommission->highamount . " " . $singlecommission->amount . "<br>";

	endforeach;*/

	//echo $data['price'];
?>