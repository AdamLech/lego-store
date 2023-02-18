<?php
    define('HOST', 'localhost');
    define('DB_NAME', 'lego-store');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Lego Store Design</title>
</head>

<body>
    <?php
        session_start();

        if(isset($_SESSION['username'])){
            echo "spierdalaj" .  $_SESSION['password'];
        }

        if(isset($_POST['submit'])) {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

            $password = $_POST['password'];

            if($username == 'adam' && $password == 'password'){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
            } else {
                echo "Wrong login or password";
            }
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username">
        <label for="password">Password: </label>
        <input type="password" name="password">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>