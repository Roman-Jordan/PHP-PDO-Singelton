<?php require_once 'core/init.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <div id="login_form_container">
        <form name="login" id="login_form" method="post">
            <label for="uname">Username:</label>
            <input name='uname' type="text">
            <label for="password">Password:</label>
            <input type="text" name="password">
            <input type="submit">
            <input type="hidden" value="<?php echo 'sumNum8' ?>">
        </form>
        <div id="register">
            <a href="#">Register</a>
            <span>/</span>
            <a href="#">Forgot Password</a>
        </div>
        <?php
        $user = DB::getInstance()->update('users', 1, array(
            'username' =>'Bill',
            'password' =>'password',
            'salt'     =>'cat'
        ));
       
        ?>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
</body>

</html>