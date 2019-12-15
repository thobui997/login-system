<?php
	
	session_start();
	if (isset($_POST['submit'])) {
		include "db.inc.php";

		$usrname = mysqli_real_escape_string($conn, $_POST['user_usrname']);
		$pwd     = mysqli_real_escape_string($conn, $_POST['user_pwd']);

		// error handlers
		// check empty
		if (empty($usrname) || empty($pwd)) {

			header("location: ../index.php?login=error");
			exit();

		} else {

			$sql         = "SELECT * FROM Users WHERE user_usrname='$usrname' OR user_email='$usrname'";
			$result      = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 1) {
				header("location: ../index.php?login=notuid");
				exit();
			} else {
				if ($row = mysqli_fetch_assoc($result)) {
					// de-hashing password
					$deHashPwd = password_verify($pwd, $row['user_pwd']);
					if ($deHashPwd == false) {
						header("location: ../index.php?login=pass-error");
						exit();
					} elseif ($deHashPwd == true) {
						$_SESSION['u_id']      = $row['user_id'];
						$_SESSION['u_first']   = $row['user_first'];
						$_SESSION['u_last']    = $row['user_last'];
						$_SESSION['u_email']   = $row['user_email'];
						$_SESSION['u_usrname'] = $row['user_usrname'];
						header("location: ../index.php?login=success");
						exit();
					} 
				}
			}
		}
	} else {
		header("location: ../index.php?login=error");
	}

?>