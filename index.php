<?php 
    require_once 'Config/init.php';
?>

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
    <form name="login" id="login_form">
        <label for="uname">Username:</label>
        <input name='uname' type="text">
        <label for="password">Password:</label>
        <input type="text" name="password">
        <input type="hidden" value="<?php echo 'sumNum8' ?>">
    </form>
</body>

</html>