<?php

	$output[] = '<table class="table table-striped">
					<thead>
						<tr>
							<th>Status</th>
							<th>From</th>
							<th>To</th>
							<th>Pick Up Point</th>
							<th>Date</th>
							
						</tr>
					</thead>
					<tbody>';

					foreach($data['trips_unconfirmed'] as $trip) : 

						$output[] = '<tr>';
							$output[] = '<td><a href="' . URLROOT . 'dashboards/trip-details-d/' . $trip->id . '"><span class="btn btn-info">Unconfirmed</span></a></td>';
							/*
							$output[] = '<td data-title="Column 1">' . str_replace("+", " ", $trip->tripfrom) . '</td>';
							$output[] = '<td data-title="Column 1">' . str_replace("+", " ", $trip->tripto) . '</td>';*/
							
							$output[] = '<td>' . $trip->tripfrom . '</td>';
							$output[] = '<td>' . $trip->tripto . '</td>';
							$output[] = '<td>' . $trip->pickuppoint . '</td>';
							$output[] = '<td>' . $trip->tripdate . ' ' . $trip->triptime . '</td>';								
							
						$output[] = '</tr>';

					endforeach;										

	$output[] = '</tbody>
				</table>';
	

	echo join('',$output);
?>