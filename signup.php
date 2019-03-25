<?php
		require_once 'connect.php';
		session_start();

		/*if (isset($_SESSION['Id'])) {
			# code...
			header('location: index.php');
		}*/

		if ($_POST) {
			# code...
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$email = $_POST['email'];
			$signup=$_POST['Signup'];

			if ($signup=='Signup') {
				# code...
				if (!empty($user) && !empty($pass) && !empty($email)) {
					# code...
					$sql= "INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$user','$pass','$email')";
					$result = mysqli_query($con,$sql);
					$sql1= "INSERT INTO `login`(`Id`, `password`) VALUES ('$user','$pass')";
					$result1 = mysqli_query($con,$sql1);
					header('location: loginpage.html');						
				}
				else{
					echo "All fields are required.";
				}
			}
			else{
					//header('location: index.php');
					echo "Ye kaam nhi kr rha";
			}
		}
?>