<?php
session_start();
if(!isset($_SESSION['advid'])){
    header("location: ../Guest/Login.php");
}
?>