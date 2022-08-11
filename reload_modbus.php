<?php 
// application/json und UTF8 for php api
header("Content-Type: application/json; charset=utf-8");


require_once('Phpmodbus/ModbusMaster.php');
require_once('setup_modbus.php');



$json_setup = json_decode($setup,true);


$response = array('modbus'=>array());


foreach($json_setup as $setup) // each modbus api
{

	$modbus_name = $setup['name'];
	$modbus_url = $setup['url'];
	$modbus_protocol = $setup['protocol'];
	$modbus_success = true;
	$modbus_error = '';
	$modbus_meters = array();

	 // Modbus master
	 $modbus = new ModbusMaster($modbus_url, $modbus_protocol);

	foreach($setup['meters'] as $meter) // each meter in meters
	{

		$name = $meter['name'];
		$unit_of_measurement = $meter['unit_of_measurement'];
		$data_type = $meter['data_type'];
		$unit_id = $meter['unit_id'];
		$address = $meter['address'];
		$scale = $meter['scale'];

		try {
			// FC 3
			$recData = $modbus->readMultipleRegisters($unit_id, $address, 1);

			if ($data_type=="int16") { $values = array_chunk($recData, 2); foreach($values as $bytes) $return_value = PhpType::bytes2signedInt($bytes); $scaled_value = $return_value / $scale; } 
			if ($data_type=="uint16") { $values = array_chunk($recData, 2); foreach($values as $bytes) $return_value = PhpType::bytes2signedInt($bytes); $scaled_value = $return_value / $scale; } 
			if ($data_type=="int32") { $values = array_chunk($recData, 4); foreach($values as $bytes) $return_value = PhpType::bytes2signedInt($bytes); $scaled_value = $return_value / $scale; } 
			if ($data_type=="uint32") { $values = array_chunk($recData, 4); foreach($values as $bytes) $return_value = PhpType::bytes2signedInt($bytes); $scaled_value = $return_value / $scale; } 
			if ($data_type=="string") { $scaled_value = PhpType::bytes2string($recData); } 

			//echo '<br>'.$name.': '.$scaled_value.' '.$unit_of_measurement.'<br>';

			$meters_item = array('name'=>$name,'value'=>$scaled_value,'unit_of_measurement'=>$unit_of_measurement,'unit_id'=>$unit_id,'address'=>$address);
			array_push($modbus_meters,$meters_item);

		}
		catch (Exception $e) {
			// Print error information if any
			$modbus_success = false;
			//echo $modbus;
			//echo $e;
			$modbus_error = $e->getMessage();
			// end forrach
			break;
		}

	}

	$unixtimestamp = time();

	$modbus_item = array('success'=>$modbus_success,'unixtimestamp'=>$unixtimestamp,'name'=>$modbus_name,'url'=>$modbus_url,'protocol'=>$modbus_protocol,'meters'=>$modbus_meters,'error'=>$modbus_error,'log'=>$modbus);
	array_push($response['modbus'],$modbus_item);

}	

try {
	// Convert array to json string
 	$responsestr = json_encode($response);
} catch (Exception $e) {
 	$responsestr = $e->getMessage();
}

echo $responsestr;

?>

