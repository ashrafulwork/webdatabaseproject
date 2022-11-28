<?php
session_start();
require_once("conn_db.php");
if (isset($_POST['btnInfo']) == "Insert") {
	$name1 = $_POST['name1'];	
	$name2 = $_POST['name2'];	
	$father = $_POST['father'];	
	$mother = $_POST['mother'];	
	
    $date = date_format(date_create($_POST['validity']),"Y-m-d");
	$blood = $_POST['gender'];
    $nid = $_POST['nid'];
	
	
	/*Insert into tbl_info*/

	$insertData1 = "'$name1','$name2','$father','$mother','$date','$blood','$nid'";
	$insertSQL1 = "INSERT INTO nid_info VALUES($insertData1)";
	$insertQuery1 = @mysqli_query($dbCon,$insertSQL1) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));
	/*Insert into tbl_user*/
	// $insertData2 = "'$ID','".rand(1111,9999)."','0'";
	// $insertSQL2 = "INSERT INTO tbl_user VALUES($insertData2)";
	// $insertQuery2 = @mysqli_query($dbCon,$insertSQL2) or die("Error in Table User Insertion: ".mysqli_error($dbCon));
	// /*Success or Error Message*/
	if($insertQuery1){
		$_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Inserted</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'>Not Inserted</h4>";
	}
	header('Location: ' . BASE);
}
?>
