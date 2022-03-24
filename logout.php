<?php
session_start();
session_destroy();
header('location:login.php');
?>

<!-- <script>
    window.location = "login.php"
</script> -->

<!-- <meta http-equiv="refresh" content="login.php;3"> -->