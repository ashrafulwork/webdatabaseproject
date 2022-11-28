<html lang="en">
<head>
<link rel="stylesheet" href="5.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NID UDPATE</title>
</head>
<body>




    <?php  
	require_once('conn_db.php');
	$sqlShow = "SELECT * FROM nid_info";
	$qryShow = mysqli_query($dbCon,$sqlShow);
	$numData = mysqli_num_rows($qryShow);
?>


<div>
			<span style="text-align: center"><h3>Show List & Update Option for Table Information</h3>
			</span>

			<table border="1" align="center">
				<tr style="background: #d5dbdb;">
                    <th>NAME1</th>
					<th>NAME2</th>
					<th>FATHER</th>
					<th>MOTHER</th>
					<th>DATE</th>
					<th>BLOOD</th>
                    <th>NID</th>
                    <th>ACTIONS</th>
				</tr>
				<?php if($numData>0){
					$i=0;
						while($recShow = mysqli_fetch_object($qryShow)){
							if($i%2==1){ $rowColor='Lightgreen';}else{$rowColor='#F4D03F';}				
				?>
				<tr style="background: <?php echo $rowColor;?> ;">
				    <td><?php echo $recShow->name1; ?></td>
					<td><?php echo $recShow->name2; ?></td>
					<td><?php echo $recShow->father; ?></td>
					<td><?php echo $recShow->mother; ?></td>
					<td><?php echo $recShow->date; ?></td>
					<td><?php echo $recShow->blood; ?></td>
                    <td><?php echo $recShow->nid; ?></td>
					<td>


                    
						<a target="_blank" href="nid_updateform.php?updtID=<?php echo $recShow->nid;?>">Update</a>
						<a href="nid_deleteaction.php?dltID=<?php echo $recShow->nid;?>">Delete</a>
						<a target="_blank" href="nid.php?updtID=<?php echo $recShow->nid;?>">Card View</a>
					</td>
				</tr>
				<?php $i++;}}?>
			</table>			
            	
		</div>

 <br><br><br><br>
    <div>
    <span><a href="/webdatabaseproject/php_prac1/nid_show.php" id="a1"> BACK</a>
        

    </div>
</span>

        </body>
</html>