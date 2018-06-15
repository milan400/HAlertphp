<?php
	
	require "initz.php";

	$name = $_GET['imagename'];

	if(strlen($name)>0)
	{
		$sql = "select * from miningdb where name = '$name' ";
		$response = array();
		$result = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($result))
		 {
			array_push($response,array('Images'=>$row['Images']));
		}
	}

	echo json_encode($response);

	mysqli_close($con);

?>
