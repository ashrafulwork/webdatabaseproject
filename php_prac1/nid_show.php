<?php 
require_once("nid_showaction.php");
?>
<span id="sp1">


<div>
			<span style="text-align: center"><h3>Search Information from Table NID</h3>
			</span>
			<table border="1" align="center" cellspacing="15">
				<tr>
					<td colspan="8">
						<form action="" method="post" enctype="multipart">
							
							
							<input type="submit" name="btnSrch" value="Search" />
							<form action="" method="post" enctype="multipart">
							<input type="text" name="srchID" />
						</form>
					</td>
				</tr>
			<?php if(@$numSrch>0){ ?>
				<tr style="background: #d5dbdb;" >
                    <th>NAME1</th>
					<th>NAME2</th>
					<th>FATHER</th>
					<th>MOTHER</th>
					<th>DATE</th>
					<th>BLOOD</th>
                    <th>NID</th>
					
				</tr>
				<tr>
                    <td><?php echo $recSrch->name1; ?></td>
					<td><?php echo $recSrch->name2; ?></td>
					<td><?php echo $recSrch->father; ?></td>
					<td><?php echo $recSrch->mother; ?></td>
					<td><?php echo $recSrch->date; ?></td>
					<td><?php echo $recSrch->blood; ?></td>
                    <td><?php echo $recSrch->nid; ?></td>
					
				</tr>
				<?php }?>
				
               
			</table>
			</span>
			<br>
			
			<span><a href="/webdatabaseproject/php_prac1/nid_input.php" id="a2">Back to HOME</a>
			<br><br>
            <span><a href="/webdatabaseproject/php_prac1/nid_update.php" id="a2">  Update Database</a>
			<br><br><span><a href="/webdatabaseproject/php_prac1/nid.php" id="a2">  Show NID view</a>
			
		</div>


<div>
	
			<span style="text-align: center"><h3>Show List from Table NID</h3>
			</span>
            
			<link rel="stylesheet" href="hola5.css">
			<table border="4" align="center" cellspacing="8">
				<tr style="background: #d5dbdb;">
					<th>NAME</th>
					<th>নাম </th>
					<th>পিতা</th>
					<th>মাতা</th>
					<th>DATE</th>
					<th>BLOOD</th>
                    <th>NID</th>
					<th>ACTIONS</th>
				</tr>
				<?php if($data>0){
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
					<a target="_blank" href="nid.php?updtID=<?php echo $recShow->nid;?>" id="ggwp3">Card View</a>
					</td>
				</tr>
				<?php $i++;}}?>
			</table>			
		</div>
							<br><br><br>
		