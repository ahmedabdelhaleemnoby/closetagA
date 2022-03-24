<?php 
    session_start(); //connect
    $_SESSION['username'] = "Ahmed"; // save value
    // $_SESSION['name'] = "Khaled"; // ahmed
    $_SESSION['password'] = "123123"; // ahmed
    echo $_SESSION['username']; // read value
?>