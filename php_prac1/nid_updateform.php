<?php 
	session_start();
	require_once('conn_db.php');
	$updtID=$_GET['updtID']; 
	$sqlUpdtShow = "SELECT * FROM nid_info WHERE nid='$updtID'";
	$qryUpdtShow = mysqli_query($dbCon,$sqlUpdtShow);
	$recUpdtShow = mysqli_fetch_object($qryUpdtShow);	
?>
<html lang="en">
<head>
<link rel="stylesheet" href="6.css">
<link rel="stylesheet" href="5.1.1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NID INPUT</title>
</head>
<body>

		<?php 
		if(@$_SESSION['msg']!=""){
			echo @$_SESSION['msg']; echo @$_SESSION['msg']="";
		}
		?>

		</span>
		<form action="nid_updateaction.php" method="post" enctype="multipart">
		<table border="1" align="center">
			<tr>
				
                <td>
					<label>NAME1:: </label>
					<input type="text" name="name1" value="<?php echo $recUpdtShow->name1; ?>" />
				</td>
                <td>
					<label>NAME2:: </label>
					<input type="text" name="name2" value="<?php echo $recUpdtShow->name2; ?>" />
				</td>
                <td>
					<label>FATHER:: </label>
					<input type="text" name="father" value="<?php echo $recUpdtShow->father; ?>" />
				</td>
                <td>
					<label>MOTHER:: </label>
					<input type="text" name="mother" value="<?php echo $recUpdtShow->mother; ?>" />
				</td>
                <td>
					<label>DATE:: </label>
					<input type="date" name="validity" value="<?php echo $recUpdtShow->date; ?>" />
				</td>
                <td> 
					<label>NID:: </label>
					<input disabled="disabled" type="text" value="<?php echo $recUpdtShow->nid;?>" />
					<input type="hidden" name="nid" value="<?php echo $updtID; ?>">
				</td>
			</tr>
			
			<tr>
				<td> 
					<label>BLOOD:: </label>
					<select name="blood">
						<option value="-99">Select Blood Group</option>
						<option <?php if($recUpdtShow->blood=="A+"){echo "selected";}?> value="A+">A+</option>
						<option <?php if($recUpdtShow->blood=="A-"){echo "selected";}?> value="A-">A-</option>
						<option <?php if($recUpdtShow->blood=="B+"){echo "selected";}?> value="B+">B+</option>
						<option <?php if($recUpdtShow->blood=="B-"){echo "selected";}?> value="B-">B-</option>
						<option <?php if($recUpdtShow->blood=="AB+"){echo "selected";}?> value="AB+">AB+</option>
						<option <?php if($recUpdtShow->blood=="AB-"){echo "selected";}?> value="AB-">AB-</option>
					</select>
				</td>
				
			</tr>
            
		</table>
        <td>
			
					<input type="submit" name="btnUpdt" value="Update" id="in1" /><br><br>
					<span><a href="/webdatabaseproject/php_prac1/nid_update.php" id="a2">Back</a>
				</td>
		</form>
		</div>
	<!-- Problem + Solution: 002 [FORM END]-->
</body>
</html>


