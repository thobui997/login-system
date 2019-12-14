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
        <nav class="nav nav-custom">
            <h1>LOGIN</h1>
            <form accept-charset="utf-8" class="form-signin">
                <input type="text" placeholder="Username/Email" name="user_id">
                <input type="password" placeholde="password" placeholder="Enter your password" name="user_pwd">
                <button type="submit" class="btn btn-green sign-in">Login</button>
            </form>
            <a href="sign-up.php" class="btn btn-red sign-up">Register</a>
        </nav>
        <section>
            <h3>Sign Up</h3>
            <div class="content">
                <form action="inc/signup.inc.php" method="post" >
                    <input type="text" name="user_first" placeholder="First Name">
                    <input type="text" name="user_last" placeholder="Last Name">
                    <input type="email" name="user_email" placeholder="Email">
                    <input type="text" name="user_usrname" placeholder="Username">
                    <input type="password" name="user_pwd" placeholder="Password">
                    <button type="submit" class="btn btn-submit sign-in" name="submit">Register</button>
                </form>
            </div>
        </section>
        <footer>
            <p>Design by <a href="">Tho Bui</a></p>
        </footer>
    </div>
</body>

</html>