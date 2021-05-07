<?php
session_start();
if($_SESSION['uid']){
  echo $_SESSION['uid'];
}else{
  header('Location:../login.php');
}

?>