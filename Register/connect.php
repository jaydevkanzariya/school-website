<?php
	

	$firstName = $lastName  =  $email  = $password = $number =$gender=NULL;

	
	
	$flag = true;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["firstName"])) {
			echo "<script> alert('Enter your name');</script>";
			$flag = false;
			exit();
			header("Location: register.html");
		} 
		else {
			$firstName = test_input($_POST["firstName"]);
		}

		if (empty($_POST["lastName"])) {
			echo "<script> alert('Enter your Lastname');</script>";
			$flag = false;
			exit();
			header("Location: register.html");

		} else {
			$lastName = test_input($_POST["lastName"]);
		}

		if (empty($_POST["email"])) {
			echo "<script> alert('Enter your Email');</script>";
			$flag = false;
			exit();
			header("Location: register.html");
		} else {
			$email = test_input($_POST["email"]);
		}

		if (empty($_POST["password"])) {
			echo "<script> alert('Enter your Password');</script>";
			$flag = false;
			exit();
			header("Location: register.html");
		} else {
			$password = test_input($_POST["password"]);
		}
		if (empty($_POST["number"])) {
			echo "<script> alert('Enter your number');</script>";
			$flag = false;
			exit();
			header("Location: register.html");
		} else {
			$number = test_input($_POST["number"]);
		}
		if (empty($_POST["gender"])) {
			echo "<script> alert('Enter your gender');</script>";
			$flag = false;
			exit();
			header("Location: register.html");
		} else {
			$gender = test_input($_POST["gender"]);
		}



		if ($flag) {

			$conn = new mysqli('localhost', 'root', '', 'test_db');

			if ($conn->connect_error) {
				die("connection failed error: " . $conn->connect_error);
			}
			
			$sql = "INSERT INTO registration(firstName,lastName,email,password,number,gender ) VALUES('$firstName','$lastName','$email','$password','$number','$gender')";

		

			
			if ($conn->query($sql) === TRUE) {
				echo ($firstName);
				echo (" Thank you,Your Registration successfully...");
			}
		}
	}



	

function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>