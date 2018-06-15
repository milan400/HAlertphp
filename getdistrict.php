<?php
	
	require "initz.php";

	$name = $_GET['zonename'];

	if(strlen($name)>0)
	{
		$sql = "select * from $namez";
		$response = array();
		$result = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($result))
		 {
			array_push($response,array('id'=>$row['id'],'name'=>$row['Name']));
		}
	}

	echo json_encode($response);

	mysqli_close($con);

?>
