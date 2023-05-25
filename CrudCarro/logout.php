<?php 

    @session_start();
    unset($_SESSION['login']);
    @session_write_close();
    header('location:login.php');




?>