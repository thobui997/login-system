<?php

	//check data back-end
	if (isset($_POST['submit'])) {
		// connect database
		include_once "db.inc.php";

		// except error special char 
		$first = mysqli_real_escape_string($conn, $_POST['user_first']);
		$last = mysqli_real_escape_string($conn, $_POST['user_last']);
		$email = mysqli_real_escape_string($conn, $_POST['user_email']);
		$username = mysqli_real_escape_string($conn, $_POST['user_usrname']);
		$pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);

		// error handlers
		// check emty field
		if (empty($first) || empty($last) || empty($email) || empty($username) || empty($pwd)) {
			# code...
			header("Location: ../sign-up.php?signup=emty");
			exit();
		} else {
			// check if input character invalid
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../sign-up.php?signup=invalid");
				exit();
			} else {
				// check if email valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../sign-up.php?signup=email");
					exit();
				} else {
					$sql = "SELECT * Users WHERE user_id='$user_id'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../sign-up.php?signup=usertaken");
						exit();
					} else {
						// hashing password
						$hashedPass = password_hash($pwd, PASSWORD_DEFAULT);
						$sql = "INSERT INTO Users(user_first, user_last, user_email, user_usrname, user_pwd) VALUES ('$first', '$last', '$email', '$username', '$hashedPass')";
						mysqli_query( $conn, $sql);
						header("Location: ../sign-up.php?signup=success");
						exit();
					}
				}
			}
		}
	} else {
		header("Location: ../signup.php?sign-up=error");
	}

?>