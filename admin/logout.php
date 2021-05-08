<?php 
 session_start();
 session_destroy();
 include('header.php');

 header('Location:../login.php');

?>