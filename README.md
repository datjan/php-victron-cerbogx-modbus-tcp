# php-victron-cerbogx-modbus-tcp
This is a online information WebUI with rest api based on php showing information from Victron Cerbo GX via Modus TCP

## WebUi
index.php
![alt text](https://github.com/datjan/php-victron-cerbogx-modbus-tcp/blob/main/img_webpage.png?raw=true)

## Rest Json
reload_modbus.php
![alt text](https://github.com/datjan/php-victron-cerbogx-modbus-tcp/blob/main/img_restapi.png?raw=true)

## Configuration Victron Cerbo GX
Activate Modbus within the Victron Remote Console.
- Settings -> Services -> Modbus TCP -> Enabled

## Configuration PHP

Within the following file you can configure your modbus connection:
- setup_modbus.php


Example Configuration
- url = ip from the Victron Cerbo GX device
- meters information can be found in Victron "CCGX-Modbus-TCP-register-list" Excel-Document
```
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
```

## Actual Supported Data Types
```
- string
- int16
- uint16
- int32
- uint32
```

