<?php 
	session_start();
	require_once('conn_db.php');
    $updtID=$_GET['updtID']; 
	$sqlShow = "SELECT * FROM nid_info WHERE nid='$updtID'";
    $qryShow = mysqli_query($dbCon,$sqlShow);
    $data = mysqli_num_rows($qryShow);
	
?>