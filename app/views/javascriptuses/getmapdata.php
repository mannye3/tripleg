<?php

	function parseToXML($htmlStr){
	    $xmlStr=str_replace('<','&lt;',$htmlStr);
	    $xmlStr=str_replace('>','&gt;',$xmlStr);
	    $xmlStr=str_replace('"','&quot;',$xmlStr);
	    $xmlStr=str_replace("'",'&#39;',$xmlStr);
	    $xmlStr=str_replace("&",'&amp;',$xmlStr);
	    return $xmlStr;
	}

	header("Content-type: text/xml");

	 // Start XML file, echo parent node
	echo "<?xml version='1.0' ?>";
	echo '<markers>';
	// Iterate through the rows, printing XML nodes for each

	foreach($data['map_info'] as $mapinfo) : 

		// Add to XML document node
	  	echo '<marker ';
	  	echo 'id="' . $mapinfo->id . '" ';
	  	echo 'name="' . parseToXML($mapinfo->property_title) . '" ';
	  	echo 'address="' . parseToXML($mapinfo->property_address) . '" ';
	  	echo 'lat="' . $mapinfo->lat . '" ';
	  	echo 'lng="' . $mapinfo->lng . '" ';
	  	echo 'type="' . $mapinfo->property_type . '" ';
	  	echo '/>';

	endforeach;
		 //property_title, property_status, property_type, price, property_rooms, property_bathrooms, property_address, pics, lat, lng, state, lga, ref_id
	/*while($count < count($row)) {

	    // Add to XML document node
	  	echo '<marker ';
	  	echo 'id="' . $row[$count]->id . '" ';
	  	echo 'name="' . parseToXML($row[$count]->name) . '" ';
	  	echo 'address="' . parseToXML($row[$count]->address) . '" ';
	  	echo 'lat="' . $row[$count]->lat . '" ';
	  	echo 'lng="' . $row[$count]->lng . '" ';
	  	echo 'type="' . $row[$count]->type . '" ';
	  	echo '/>';

	    $count++;
	}*/

	// End XML file
	echo '</markers>';

	/*$output[] = $data['map_info']->SlideCount;

	echo join('',$output);*/
?>