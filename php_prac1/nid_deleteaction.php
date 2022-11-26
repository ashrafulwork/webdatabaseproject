<?php
require_once ("conn_db.php");
/*DELETE*/
$dltID = $_GET['dltID'];
$sqlDelt = "DELETE FROM nid_info WHERE nid='$dltID'";
mysqli_query($dbCon,$sqlDelt);
header('Location: ' . 'http://localhost/webdatabaseproject/php_prac1/nid_update.php');
?>