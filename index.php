<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HOME LOGIN SYSTEM</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home index">
	<div class="wrap">
		
		<?php 
			include_once "includes/navbar.php";
		?>

		<section>
			<h3>home</h3>
			<?php
				if (isset($_SESSION['u_id'])) {
					echo '<p> login success </p>';
				}
			?>
		</section>

		
		<?php 
			include_once "includes/footer.php";
		?>
	</div>
</body>
</html>