<?php 

// Stammdaten
$setup = '
[{
	"name":"Victron Energiespeichersystem",
	"url":"192.168.178.36",
	"protocol":"TCP",
	"meters":[
		{
			"name":"Grid L1",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"unit_id":"100",
			"address":"820",
			"scale":"1"
		},
		{
			"name":"Grid L2",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"unit_id":"100",
			"address":"821",
			"scale":"1"
		},
		{
			"name":"Grid L3",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"unit_id":"100",
			"address":"822",
			"scale":"1"
		},
		{
			"name":"ESS Minimum SoC setpoint",
			"unit_of_measurement":"%",
			"data_type":"uint16",
			"unit_id":"100",
			"address":"2901",
			"scale":"10"
		},
		{
			"name":"Battery state (System)",
			"unit_of_measurement":"(0=idle;1=charging;2=discharging)",
			"data_type":"uint16",
			"unit_id":"100",
			"address":"844",
			"scale":"1"
		},
		{
			"name":"Battery State of Charge (System)",
			"unit_of_measurement":"%",
			"data_type":"uint16",
			"unit_id":"100",
			"address":"843",
			"scale":"1"
		}, 	

		{
			"name":"Grid L1 Power",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"unit_id":"30",
			"address":"2600",
			"scale":"1"
		},
		{
			"name":"Grid L2 Power",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"unit_id":"30",
			"address":"2601",
			"scale":"1"
		},
		{
			"name":"Grid L3 Power",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"unit_id":"30",
			"address":"2602",
			"scale":"1"
		},
		{
			"name":"Grid L1 Voltage",
			"unit_of_measurement":"V",
			"data_type":"int16",
			"unit_id":"30",
			"address":"2616",
			"scale":"10"
		},
		{
			"name":"Grid L2 Voltage",
			"unit_of_measurement":"V",
			"data_type":"int16",
			"unit_id":"30",
			"address":"2618",
			"scale":"10"
		},
		{
			"name":"Grid L3 Voltage",
			"unit_of_measurement":"V",
			"data_type":"int16",
			"unit_id":"30",
			"address":"2620",
			"scale":"10"
		},
		{
			"name":"Grid L1 Energy from net",
			"unit_of_measurement":"kWh",
			"data_type":"int32",
			"unit_id":"30",
			"address":"2622",
			"scale":"100"
		},
		{
			"name":"Grid L2 Energy from net",
			"unit_of_measurement":"kWh",
			"data_type":"int32",
			"unit_id":"30",
			"address":"2624",
			"scale":"100"
		},
		{
			"name":"Grid L3 Energy from net",
			"unit_of_measurement":"kWh",
			"data_type":"int32",
			"unit_id":"30",
			"address":"2626",
			"scale":"100"
		},
		{
			"name":"Grid L1 Energy to net",
			"unit_of_measurement":"kWh",
			"data_type":"int32",
			"unit_id":"30",
			"address":"2628",
			"scale":"100"
		},
		{
			"name":"Grid L2 Energy to net",
			"unit_of_measurement":"kWh",
			"data_type":"int32",
			"unit_id":"30",
			"address":"2630",
			"scale":"100"
		},
		{
			"name":"Grid L3 Energy to net",
			"unit_of_measurement":"kWh",
			"data_type":"int32",
			"unit_id":"30",
			"address":"2632",
			"scale":"100"
		}
	]
}]';

?>

