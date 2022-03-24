<?php 
    session_start(); // connect
    
    echo isset( $_SESSION['password']) ?   $_SESSION['password'] : ''; // read
?>