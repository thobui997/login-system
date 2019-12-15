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
            <h3>Sign Up</h3>
            <div class="content">
                <form action="inc/signup.inc.php" method="post">
                    <input type="text" name="user_first" placeholder="First Name">
                    <input type="text" name="user_last" placeholder="Last Name">
                    <input type="email" name="user_email" placeholder="Email">
                    <input type="text" name="user_usrname" placeholder="Username">
                    <input type="password" name="user_pwd" placeholder="Password">
                    <button type="submit" class="btn btn-submit sign-in" name="submit">Register</button>
                </form>
            </div>
        </section>
        <?php
            include_once "includes/footer.php";
        ?>
    </div>
</body>

</html>