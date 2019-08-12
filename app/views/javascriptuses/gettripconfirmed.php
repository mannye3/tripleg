<?php

	function getSQLDateFormat($date) {
		$date_part = explode(',', $date);
	    //$date_part2 = $date_part[0] . $date_part[1];
	    $date_part2[$date_part[0]] = isset($date_part[1]) ? $date_part[1] : null;
		return date('Y-m-d', strtotime($date_part2[$date_part[0]]));
	    //return var_dump($date_part);
	}

	$output[] = '<table class="table table-striped">
					<thead>
						<tr>
							<th>Status</th>
							<th>From</th>
							<th>To</th>
							<th>Pick Up Point</th>
							<th>Date</th>
							<!-- <th>Price</th>
							<th>Comm.</th>
							<th>Total</th> -->
							
						</tr>
					</thead>
					<tbody>';

					foreach($data['trips_confirmed'] as $trip) : 

						$output[] = '<tr>';
							if($trip->status == "1"){
								$output[] = '<td><span class="btn btn-success">Fully Booked</span></td>';

								$output[] = '<td style="color: #009900;">' . $trip->tripfrom . '</td>';
								$output[] = '<td style="color: #009900;">' . $trip->tripto . '</td>';
								$output[] = '<td style="color: #009900;">' . $trip->pickuppoint . '</td>';
								$output[] = '<td style="color: #009900;">' . $trip->tripdate . ' ' . $trip->triptime . '</td>';
							}
							else{
								$today = date("Y-m-d");
								$date = getSQLDateFormat($trip->tripdate);

								if ($date < $today) {
									$output[] = '<td><span class="btn btn-danger">Expired</span></td>';

									$output[] = '<td style="color: #dc3545;">' . $trip->tripfrom . '</td>';
									$output[] = '<td style="color: #dc3545;">' . $trip->tripto . '</td>';
									$output[] = '<td style="color: #dc3545;">' . $trip->pickuppoint . '</td>';
									$output[] = '<td style="color: #dc3545;">' . $trip->tripdate . ' ' . $trip->triptime . '</td>';
								}
								else{
									$output[] = '<td><span class="btn btn-success">Confirmed</span></td>';

									$output[] = '<td>' . $trip->tripfrom . '</td>';
									$output[] = '<td>' . $trip->tripto . '</td>';
									$output[] = '<td>' . $trip->pickuppoint . '</td>';
									$output[] = '<td>' . $trip->tripdate . ' ' . $trip->triptime . '</td>';
								}
								
							}
							/*
							$output[] = '<td data-title="Column 1">' . str_replace("+", " ", $trip->tripfrom) . '</td>';
							$output[] = '<td data-title="Column 1">' . str_replace("+", " ", $trip->tripto) . '</td>';*/								
							
						$output[] = '</tr>';

					endforeach;										

	$output[] = '</tbody>
				</table>';
	

	echo join('',$output);
?>