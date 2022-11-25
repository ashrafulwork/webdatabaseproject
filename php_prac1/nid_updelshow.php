<?php
require_once ("conn_db.php");
$sqlShow = "SELECT * FROM nid_info";
$qryShow = mysqli_query($dbCon,$sqlShow);
$numData = mysqli_num_rows($qryShow);


?>