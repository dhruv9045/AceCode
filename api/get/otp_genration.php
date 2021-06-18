<?php

if(empty($_GET['mobile']) && empty($_GET['otp']))
	{
		$myObj->Message= "Please enter mandatory fields";
		$msgJSON = json_encode($myObj);
    	echo $msgJSON ;
        exit;

	}
	else
	{
		$mobile=$_GET['mobile'];
		$otp=$_GET['otp'];
	    $url='http://2factor.in/API/V1/f868d748-a722-11eb-80ea-0200cd936042/SMS/'.$mobile.'/'.$otp.'/OTP-VERIFY-SMS';
	    $client = curl_init($url);
	    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	    $response = curl_exec($client);
		echo $response ;
        exit;
	}

?>