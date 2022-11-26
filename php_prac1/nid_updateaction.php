<?php
session_start();
require_once ("conn_db.php");
if (isset($_POST['btnUpdt']) == "Update") {
	$name1 = $_POST['name1'];	
	$name2 = $_POST['name2'];	
	$father = $_POST['father'];	
	$mother = $_POST['mother'];	
	
    $date = date_format(date_create($_POST['validity']),"Y-m-d");
    $blood = $_POST['blood'];
    $nid = $_POST['nid'];
	/*Update into tbl_info*/
	$updtSQL= "UPDATE nid_info SET name1='$name1',name2='$name2',father='$father',mother='$mother',date='$date',blood='$blood',nid='$nid' WHERE nid='$nid'";
	$updtQry = @mysqli_query($dbCon,$updtSQL) or die("Error in Table Info Update: ".mysqli_error($dbCon));
	/*Success or Error Message*/
	if($updtQry){
		$_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Updated</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'>Not Updated</h4>";
	}
	header('Location: ' . BASE);
}
?>