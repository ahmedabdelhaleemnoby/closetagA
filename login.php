<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_POST['username']))
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if($user == "ahmed" and $pass == 123123)
        {
            $_SESSION['username'] = $user;
            header("location:index.php");
        }
        else
        {
            echo "Wrong username or password";
        }
    }
    ?>
    <form action = "" method="post">
        <input type="text" name="username" placeholder = "username">
        <input type="password" name="password" placeholder = "password">
        <button type="submit">sign in</button>
    </form>
</body>
</html>