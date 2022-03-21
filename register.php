<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <!-- 
        - submit btn
        - action
        - method
        - input name

        post [secure,http request ->background,unlimited,less ]
        get [unsecure,url,limited 251,speed]

-->
    <h1> 
    <?php 
    if(isset($_POST['fname']))
    {
        $fname = strtolower($_POST['fname']);
        $lname = strtolower($_POST['lname']);
        $uname = strtolower($_POST['uname']);
        $mail = strtolower($_POST['email']);
        $pass = $_POST['password'];
        $pass_hash = base64_encode($_POST['password']);
        $cpass = $_POST['cPassword'];
        echo $pass_hash;
    }
    ?>
    </h1>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="FName">
        <input type="text" name="lname" placeholder="LName">
        <input type="text" name="uname" placeholder="Username">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="cPassword" placeholder="rePassword">
        <button type="submit">sign up</button>
    </form>
</body>
</html>