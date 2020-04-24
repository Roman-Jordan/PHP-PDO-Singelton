<?php require_once 'core/init.php';

if (Input::exists()) {
    $validate = new Validation();
    $errors = array();
    $validation = $validate->check($_POST, array(
        'username' => array(
            'required' => true,
            'min'      => 2,
            'max'      => 20,
            'unique'   => 'users'
        ),
        'password' => array(
            'required' => true,
            'min'      => 6,
            'max'      => 30
        ),
        'passwordAgain' => array(
            'required'  => true,
            'matches'   => 'password'
        ),
        'name' => array(
            'required' => true,
            'min'      => 3,
            'max'      => 50
        )
    ));

    if ($validation->passed()) {
        echo 'passed';
    } else {
        $errors = $validation->errors();
    }
}

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
    <div id="login_form_container">
        <form name="login" id="login_form" method="post">
            <label for="username">Username:</label>
            <?php if (isset($errors['username'])) {
                echo '<p class="formError">', $errors['username'], '</p>';
            } ?>
            <input name='username' type="text" value="<?php echo escape(Input::get('username')); ?>">

            <!-- Password -->
            <label for="password">Password:</label>
            <?php if (isset($errors['password'])) {
                echo '<p class="formError">', $errors['password'], '</p>';
            } ?>
            <input type="text" name="password">

            <!-- Password Again -->
            <label for="passwordAgain">Password Again:</label>
            <?php if (isset($errors['passwordAgain'])) {
                echo '<p class="formError">', $errors['passwordAgain'], '</p>';
            } ?>
            <input type="text" name="passwordAgain">

            <!-- Name -->
            <label for="name">Name:</label>
            <?php if (isset($errors['name'])) {
                echo '<p class="formError">', $errors['name'], '</p>';
            } ?>
            <input type="text" name="name" value="<?php echo escape(Input::get('name')); ?>">

            <!-- Submit -->
            <input type="submit">

            <!-- Token -->
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        </form>
    </div>
</body>

</html>