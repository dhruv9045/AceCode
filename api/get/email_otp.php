      
      <?php

	
	if(empty($_GET['email']) && empty($_GET['otp']))
	{

		$msg= json_encode(array(
            "Status" => "False",
			"Details"=>"some fields are missing"
        ));

		echo $msg;
		exit;

	}
	else
	{
	$email=$_GET['email'];
	$otp=$_GET['otp'];
	
	  $to = "$email";
         $subject = "OTP to verify email address";
         
          $message = "$otp is your SELFEX verification OTP. The code will be valid for 10 mins. Do not share this OTP with anyone. For details, visit www.selfex.in";
         //$message .= "<h1>This is headline.</h1>";
         
         $header = "From:notification@goselfex.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
     if( $retval == true ) 
	{
      	
	   $msg= json_encode(array(
            "Status" => "True",
			"Details"=>"OTP sent over email is successfull"
        ));

		echo $msg;
		exit;


    }
	else
	 {
       $msg= json_encode(array(
            "Status" => "False",
			"Details"=>"Failed!! Please try again"
        ));

		echo $msg;
		exit;
    }
	
	}
 
      ?>
