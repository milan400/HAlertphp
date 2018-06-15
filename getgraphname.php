<?php
	
	require "initz.php";

		$sql = "select * from miningdb";
		$response = array();
		$result = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($result))
		 {
			array_push($response,array('name'=>$row['name']));
		}
	

	echo json_encode($response);

	mysqli_close($con);

?>
