<nav class="nav nav-custom">
    <h1>LOGIN</h1>
    <?php
    	if (isset($_SESSION['u_id'])) {
    		echo '<a href="inc/logout.inc.php" class="btn btn-red sign-up" >Logout</a>';
    	} else {
    		echo '<form action="inc/login.inc.php" method="post" class="form-signin">
        			<input type="text" placeholder="Username/Email" name="user_usrname">
        			<input type="password" placeholde="password" placeholder="Enter your password" name="user_pwd">
        			<button type="submit" class="btn btn-green sign-in" name="submit">Login</button>
    			</form>
    			<a href="sign-up.php" class="btn btn-red sign-up" >Register</a>';
    	}
    ?>
</nav>