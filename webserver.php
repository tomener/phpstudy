<?php

	try{
    	$soap = new SoapClient('http://192.168.1.8:8884/ssh/ws/test?wsdl');
		$p = $soap->__soapCall('getMsg',array('msg' => 'sfdf'));
		print_r($p);
	}catch(SoapFault $e){
		echo $e->getMessage();
	}catch(Exception $e){
		echo $e->getMessage();
	}