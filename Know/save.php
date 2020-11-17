<?php

include 'conn.php';

session_start();

if (isset($_POST["action"])) {

	    $fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	    $passwordHash = md5($password);
		
        $duplicate=mysqli_query($con,"select * from users where email='$email'");

		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
        }

        else{
			$sql = "Insert into users (fullname, email, password) values ('$fullname','$email','$passwordHash')";
            
			if (mysqli_query($con, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
        }
    }
		
    
    

?>