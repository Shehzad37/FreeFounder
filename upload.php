<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$image = $_POST['image'];
               // $name = $_POST['name'];
		
		require_once('dbConnect.php');
		
		$sql ="SELECT id FROM volleyupload ORDER BY id ASC";
		
		$res = mysqli_query($con,$sql);
		
		$id = 0;
		
		while($row = mysqli_fetch_array($res)){
				$id = $row['id'];
		}
		
		$path = "uploads/1.png";
		
		$actualpath = "http://localhost/$path";
		
		$sql = "INSERT INTO volleyupload (photo) VALUES ('$actualpath')";
		
		if(mysqli_query($con,$sql)){
			file_put_contents($path,base64_decode($image));
			echo "Successfully Uploaded";
		}
		
		mysqli_close($con);
	}else{
		echo "Error";
	}
	
	?>