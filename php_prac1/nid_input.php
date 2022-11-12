<?php session_start(); ?>
<h1>NID FORM</h1>

<html lang="en">
<head>
<link rel="stylesheet" href="3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NID INPUT</title>
</head>
<body>
<?php 
				if(@$_SESSION['msg']!=""){
					echo $_SESSION['msg']; 
					echo $_SESSION['msg']="";
				}
			?>
<form action="insert.php" method="post" enctype="multipart">
<div class="div1">
    <div class="div2">
        <br>
<span class="l1a"><label>নাম </label></span>
<span class="l1"><input type="text" name="nm1" />
<span class="l11"><label>Name </label></span>
<span class="l1"><input type="text" name="nm2" /><br><br><br><br>
<span class="l1b"><label>পিতা </label></span>
<span class="l1"><input type="text" name="father" />
<span class="l12"><label>মাতা </label></span>
<span class="l1"><input type="text" name="mother" /><br><br><br>
<span class="m1"><label>Date of Birth</label></span>
<span class="l1"><input type="date" name="validity" /><br><br><br>
<span class="m2"><label>NID No</label></span>
<span class="l1"><input type="text" name="nid" /><br>

    <p>Please fill out the information</p>

    <input type="submit" name="btnInfo" value="Insert" />
</div>
</div>






</body>
</html>