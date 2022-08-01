<?php 

// Stammdaten
$setup = '
[{
	"name":"Victron",
	"url":"192.168.178.36",
	"protocol":"TCP",
	"meters":[
		{
			"name":"Grid L1",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"slave":"100",
			"address":"820",
			"scale":"1"
		},
		{
			"name":"Grid L2",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"slave":"100",
			"address":"821",
			"scale":"1"
		},
		{
			"name":"Grid L3",
			"unit_of_measurement":"W",
			"data_type":"int16",
			"slave":"100",
			"address":"822",
			"scale":"1"
		},
		{
			"name":"ESS Minimum SoC setpoint",
			"unit_of_measurement":"%",
			"data_type":"uint16",
			"slave":"100",
			"address":"2901",
			"scale":"0.1"
		},
		{
			"name":"Battery state (System)",
			"unit_of_measurement":"(0=idle;1=charging;2=discharging)",
			"data_type":"uint16",
			"slave":"100",
			"address":"844",
			"scale":"1"
		},
		{
			"name":"Battery State of Charge (System)",
			"unit_of_measurement":"%",
			"data_type":"uint16",
			"slave":"100",
			"address":"843",
			"scale":"1"
		} 
	]
}]';

?>

