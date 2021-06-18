<?php
	
   $host        = "host = slfxsrvrdb26.goselfex.com";
   $port        = "port = 5432";
   $dbname      = "dbname = selfex";
   $credentials = "user = dev password=Connection@STart";

   $db = pg_connect("$host $port $dbname $credentials");
	if(!$db) {
		echo "Unable to connect database\n";
	} 
	else {
		//echo "Opened database successfully\n";
	}





	function fetch_postgress_data($sql=""){
		global $db;
		if(trim($sql)==""){
			return false;
		}
		$stmt = pg_query($db, $sql);
		$resultArray=array();
		while ($row = pg_fetch_assoc($stmt)) {
			$resultArray[]=$row;
		}
		return $resultArray;
	}

	function insert_postgress_data($sql=""){
		global $db;
		if(trim($sql)==""){
			return false;
		}
		 $stmt = pg_send_query($db, $sql);
		//echo $sql;
		$res = pg_get_result($db);

		if(pg_affected_rows($res)  > 0)
		{
			
			return "Insert Successfully";
		}
		else
		{	
			if(pg_result_error_field($res,PGSQL_DIAG_SQLSTATE) == '23505') 
			{
				return "Mobile number already registered" ;
			}	
		}		
	}
	
	/*-------- Procedure based Insert data -------------*/
	function insert_postgress_data_proc($sql="")
	{	
		global $db;
		if(trim($sql)==""){
			return false;
		}	
		
		$stmt = pg_query($db, $sql);
		$returnArray=pg_fetch_assoc($stmt);
		
		return $returnArray;	 	
	}

	function update_postgress_data($sql=""){
		global $db;
		if(trim($sql)==""){
			return false;
		}
		$stmt = pg_query($db, $sql);
		echo $sql;
		if(pg_affected_rows($stmt) > 0)
		{
			return true;
		}
		else
		{	
			return false;
		}		
	}
	
	function encryptIt( $q ){
		$q  = $q.md5( md5( 'cm_inspection#20' ) );
		
		$qEncoded  = base64_encode($q);
		return( $qEncoded );
	}

	function decryptIt( $q ) {
		$cryptKey  = md5( md5( 'cm_inspection#20' ) );
		
		//$qDecoded  = rtrim(base64_decode( $q ), $cryptKey);
		$bas64=base64_decode( $q );
		$qDecoded=trim(trim($bas64),trim($cryptKey));
		$ex=explode($cryptKey,$bas64);
		return( $ex[0] );
	}
?>