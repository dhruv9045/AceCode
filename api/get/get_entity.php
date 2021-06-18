<?php
include '../../include/db.php';


        $query="select entity_name,entity_type from m_entity";

    	$result=fetch_postgress_data($query);
	
		if($result==false)
		{

			$msg= json_encode(array(
            "Status" => "false",
			"Details"=>"Please contact customer care",
			"Data"=>null
        ));

		echo stripslashes($msg);
	exit;
		
		}
		else 
		{
            $msg= json_encode(array(
            "Status" => "True",
			"Details"=>"Data fetch successfully",
			"Data"=>$result
        ));

		echo $msg;
	exit;
		}

?>