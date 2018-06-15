<?php

require "init.php";

$zone = $_GET["zone"];
$district = $_GET["district"];
$disease = $_GET["disease"];

$sql = "select * from form_info where zone = '$zone'";

$result = mysqli_query($con,$sql);

if($zone!="" || $district != "" || $disease != "")
	{
		$sql = "insert into form_info(zone,district,disease) values('$zone','$district','$disease');";

		if(mysqli_query($con,$sql))
		{
			$status = "ok";
		}
		else
		{
			$status = "error";
		}
	}
	else
	{
		$status = "error";
	}


echo json_encode(array("response"=>$status));

mysqli_close($con);

?>