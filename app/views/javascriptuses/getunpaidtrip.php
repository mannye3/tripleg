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
							<th>Date</th>
							<th>Price</th>
							<th>Passengers</th>	
							<!-- <th>Pay Ref</th> -->						
						</tr>
					</thead>
					<tbody>';

					foreach($data['trips_unpaid'] as $trip) : 

						$output[] = '<tr>';
							$today = date("Y-m-d");
							$date = getSQLDateFormat($trip->tripdate);

							if ($date < $today) {
								$output[] = '<td><span class="btn btn-danger">Expired</span></td>';

								$output[] = '<td style="color: #dc3545;">' . $trip->tripfrom . '</td>';
								$output[] = '<td style="color: #dc3545;">' . $trip->tripto . '</td>';								
								$output[] = '<td style="color: #dc3545;">' . $trip->tripdate . ' ' . $trip->triptime . '</td>';
								$output[] = '<td style="color: #dc3545;">&#8358;' . number_format($trip->price, 0, '', ',') . '</td>';
								$output[] = '<td style="color: #dc3545;">' . $trip->no_of_passengers . '</td>';
								//$output[] = '<td style="color: #dc3545;">' . $trip->payref . '</td>';
							}
							else{
								$output[] = '<td><a href="' . URLROOT . 'dashboards/trip-preview/' . $trip->tripid . '_' . $trip->id . '" class="btn btn-success">Pay</a></td>';

								$output[] = '<td>' . $trip->tripfrom . '</td>';
								$output[] = '<td>' . $trip->tripto . '</td>';								
								$output[] = '<td>' . $trip->tripdate . ' ' . $trip->triptime . '</td>';
								$output[] = '<td>&#8358;' . number_format($trip->price, 0, '', ',') . '</td>';
								$output[] = '<td>' . $trip->no_of_passengers . '</td>';
								//$output[] = '<td>' . $trip->payref . '</td>';
							}							
							
						$output[] = '</tr>';

					endforeach;										

	$output[] = '</tbody>
				</table>';
	

	echo join('',$output);
?>