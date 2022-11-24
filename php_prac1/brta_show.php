<?php 
require_once("brta_showaction.php");
?>

<div>
			<span style="text-align: center"><h3>Show List from Table Information</h3>
			</span>
            <link rel="stylesheet" type="text/css" href="text1.css"/>
			<table border="1" align="center">
				<tr style="background: #d5dbdb;">
					<th>NAME</th>
					<th>DATE OF BIRTH</th>
					<th>BLOOD</th>
					<th>FATHER</th>
					<th>ISSUE DATE</th>
                    <th>VALIDITY</th>
                    <th>LICENSE</th>
                    <th>AUTHORITY</th>
				</tr>
				<?php if($data>0){
					$i=0;
						while($recShow = mysqli_fetch_object($qryShow)){
							if($i%2==1){ $rowColor='#aed6f1';}else{$rowColor='none';}				
				?>
				<tr style="background: <?php echo $rowColor;?> ;">
					<td><?php echo $recShow->name; ?></td>
					<td><?php echo $recShow->date1; ?></td>
					<td><?php echo $recShow->blood; ?></td>
					<td><?php echo $recShow->father; ?></td>
					<td><?php echo $recShow->date2; ?></td>
                    <td><?php echo $recShow->date3; ?></td>
                    <td><?php echo $recShow->license; ?></td>
                    <td><?php echo $recShow->authority; ?></td>
				</tr>
				<?php $i++;}}?>
			</table>			
		</div>


        
            <a href="/webdatabaseproject/php_prac1/brlicense.php"> BACK TO HOME</a>	
		</div>
