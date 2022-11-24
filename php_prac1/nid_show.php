<?php 
require_once("nid_showaction.php");
?>

<div>
			<span style="text-align: center"><h3>Show List from Table Information</h3>
			</span>
            <link rel="stylesheet" type="text/css" href="text1.css"/>
			<table border="1" align="center">
				<tr style="background: #d5dbdb;">
					<th>NAME1</th>
					<th>NAME2</th>
					<th>FATHER</th>
					<th>MOTHER</th>
					<th>DATE</th>
                    <th>NID</th>
				</tr>
				<?php if($data>0){
					$i=0;
						while($recShow = mysqli_fetch_object($qryShow)){
							if($i%2==1){ $rowColor='#aed6f1';}else{$rowColor='none';}				
				?>
				<tr style="background: <?php echo $rowColor;?> ;">
					<td><?php echo $recShow->name1; ?></td>
					<td><?php echo $recShow->name2; ?></td>
					<td><?php echo $recShow->father; ?></td>
					<td><?php echo $recShow->mother; ?></td>
					<td><?php echo $recShow->date; ?></td>
                    <td><?php echo $recShow->nid; ?></td>
				</tr>
				<?php $i++;}}?>
			</table>			
		</div>


        <div>
			<span style="text-align: center"><h3>Search Infor from Table User</h3>
			</span>
			<table border="1" align="center">
				<tr>
					<td colspan="3">
						<form action="" method="post" enctype="multipart">
							<input type="text" name="srchID" />
							<input type="submit" name="btnSrch" value="Search" />
						</form>
					</td>
				</tr>
			<?php if(@$numSrch>0){ ?>
				<tr style="background: #d5dbdb;">
                    <th>NAME1</th>
					<th>NAME2</th>
					<th>FATHER</th>
					<th>MOTHER</th>
					<th>DATE</th>
                    <th>NID</th>
				</tr>
				<tr>
                    <td><?php echo $recSrch->name1; ?></td>
					<td><?php echo $recSrch->name2; ?></td>
					<td><?php echo $recSrch->father; ?></td>
					<td><?php echo $recSrch->mother; ?></td>
					<td><?php echo $recSrch->date; ?></td>
                    <td><?php echo $recSrch->nid; ?></td>
					
				</tr>
				<?php }?>
               
			</table>		
            <a href="/webdatabaseproject/php_prac1/nid_input.php"> BACK TO HOME</a>	
		</div>
