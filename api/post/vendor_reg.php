<?php
include '../../include/db.php';
require "/opt/cpanel/composer/bin/vendor/autoload.php";
use \Firebase\JWT\JWT;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	
	if(empty($_POST['first_name']) && empty($_POST['country_code']) && empty($_POST['mobile']) 
	&& empty($_POST['business_entity_name']) && empty($_POST['brand_name']) && empty($_POST['entity_type']) 
	&& empty($_POST['password']) && empty($_POST['t_pin']))
	{
		$myObj->Message= "Please enter mandatory fields";
		$msgJSON = json_encode($myObj);
    	echo $msgJSON ;
        exit;

	}
	else
	{
	   $first_name = $_POST['first_name'];
	   $last_name  = $_POST['last_name'];
	   $country_code = $_POST['country_code'];
	   $mobile = $_POST['mobile'];
	   $email = $_POST['email'];
	   $business_entity_name = $_POST['business_entity_name'];
	   $brand_name = $_POST['brand_name'];
	   $entity_type = $_POST['entity_type'];
	   $password = $_POST['password'];
	   $t_pin = $_POST['t_pin'];
	}

    $query="INSERT INTO m_vendor 

	(first_name, last_name, country_code,mobile,email,business_entity_name,brand_name,entity_type,password,t_pin)
	
	VALUES 
	
	('".$first_name."','".$last_name."','".$country_code."','".$mobile."','".$email."','".$business_entity_name."','".$brand_name."','".$entity_type."','".$password."','".$t_pin."')";

    $result=insert_postgress_data($query);

	if($result=="Insert Successfully")
	{
		
	    $secret_key = "SeLfEx";
        $issuer_claim = "http://dev.goselfex.com"; // this can be the servername
        $audience_claim = "THE_AUDIENCE";
        $issuedat_claim = time(); // issued at
        $notbefore_claim = $issuedat_claim + 10; //not before in seconds
        $expire_claim = $issuedat_claim + 60; // expire time in seconds
        $token = array(
            "iss" => $issuer_claim,
            "aud" => $audience_claim,
            "iat" => $issuedat_claim,
            "nbf" => $notbefore_claim,
            "exp" => $expire_claim,
            "data" => array(
                "id" => $id,
                "firstname" => $first_name,
                "lastname" => $last_name,
                "email" => $email
        ));

        http_response_code(200);

         $jwt = JWT::encode($token, $secret_key);
        echo json_encode(
            array(
				 "Status"=>"True",
                "Details" => $result,
                "Token" => $jwt,
                "ExpireAt" => $expire_claim
            ));

		exit;
	}
	else
	{
	
	echo json_encode(
            array(
				 "Status"=>"False",
                "Details" => $result          
            ));

		exit;
	}

?>