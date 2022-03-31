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
        if (isset($_POST['fname'])) {
            $fname = strtolower($_POST['fname']);
            $lname = strtolower($_POST['lname']);
            $uname = strtolower($_POST['uname']);
            $mail = strtolower($_POST['email']);
            $pass = $_POST['password'];
            $pass_hash = md5($_POST['password']);
            $cpass = $_POST['cPassword'];
            $gender = $_POST['gender'];
            //    mysql connect
            $con = mysqli_connect("localhost", "root", "", "closetag");

            //    mysql query(insert,update,select,delete)
            $insert = mysqli_query($con, "INSERT INTO users (fname,lname,email,username,password,gender) 
            VALUES ('$fname','$lname','$mail','$uname','$pass_hash','$gender')");

            // close connection
            mysqli_close($con);
            // echo $_POST['fname'];
        }
        ?>
    </h1>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="FName"><br>
        <input type="text" name="lname" placeholder="LName"><br>
        <input type="text" name="uname" placeholder="Username"><br>
        <input type="email" name="email" placeholder="email"><br>
        <select name="gender">
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="password" name="cPassword" placeholder="rePassword"><br>
        <button type="submit">sign up</button><br>
    </form>
    <!-- 
    - action [internal - external] -> https://www.google.com welcome.php
    - method [get,post]
    [get] -> URL ?username=ahmed&password=123123
    -> limited [256 char]
    -> unsecure -> password etc
    -> speed post
    [post]-> http request background
    - input type 
    - input name 
    - submit -> redirect to action url

     -->
</body>

</html>