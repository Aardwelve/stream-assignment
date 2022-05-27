<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="styles/style.css">

</head>

<body>
<?php
    include('header.inc');
    include('menu.inc');
?>
     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name: admin"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password: admin"><br> 

        <button type="submit">Login</button>

     </form>
<?php
	include('footer.inc');
?>
</body>

</html>