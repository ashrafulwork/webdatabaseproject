<?php
require_once ("conn_db.php");
$sqlShow = "SELECT * FROM nid_info"; 
$qryShow = mysqli_query($dbCon,$sqlShow);
$data = mysqli_num_rows($qryShow);

#for table user




/*++Search++++*/
if(isset($_POST['btnSrch'])=="Search"){
	$srchID = $_POST['srchID'];
	$sqlSrch = "SELECT * FROM nid_info WHERE nid='$srchID'";
	$qrySrch = mysqli_query($dbCon,$sqlSrch);
	$numSrch = mysqli_num_rows($qrySrch);
	$recSrch = mysqli_fetch_object($qrySrch);
}



#for table info