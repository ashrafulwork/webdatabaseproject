<?php
session_start();
require_once("conn2_db.php");
if (isset($_POST['btnInfo']) == "Insert") {
	$name = $_POST['nm1'];	
    $date1 = date_format(date_create($_POST['validity1']),"Y-m-d");
	$blood = $_POST['blood'];	
	$father = $_POST['father'];	
    $date2 = date_format(date_create($_POST['validity2']),"Y-m-d");
    $date3 = date_format(date_create($_POST['validity3']),"Y-m-d");
	$license = $_POST['license'];	
    $authority = $_POST['authority'];	
	
    

	/*Insert into tbl_info*/
	$insertData1 = "'$name','$date1','$blood','$father','$date2','$date3','$license','$authority'";
	$insertSQL1 = "INSERT INTO brlicense_info VALUES($insertData1)";
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