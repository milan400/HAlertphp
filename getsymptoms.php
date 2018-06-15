<?php
	
	require "initd.php";

	$name = $_GET['disesasename'];

	if(strlen($name)>0)
	{
		$sql = "select * from $name";
		$response = array();
		$result = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($result))
		 {
			array_push($response,array('symptoms'=>$row['symptoms']));
		}
	}

	echo json_encode($response);

	mysqli_close($con);

?>
