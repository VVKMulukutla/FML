<?php
session_start();
$_SESSION = array();
session_destroy();
header("location: loginform.php");
exit;
?>