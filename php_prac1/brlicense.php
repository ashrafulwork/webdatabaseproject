<?php session_start(); ?>
<h1>Driving License INPUT</h1>

<html lang="en">
<head>
<link rel="stylesheet" href="4.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving License INPUT</title>
</head>
<body>
<?php 
				if(@$_SESSION['msg']!=""){
					echo $_SESSION['msg']; 
					echo $_SESSION['msg']="";
				}
			?>
<form action="brta_insert.php" method="post" enctype="multipart">
<div class="div1">
    <div class="div2">
        <br>
<span class="l1a"><label>নাম/Name </label></span>
<span class="l1"><input type="text" name="nm1" />
<br><br><br><br>
<span class="m1"><label>Date of Birth</label></span>
<span class="l1"><input type="date" name="birth" /><br><br><br>
    <span class="l1b"><label>রক্তের গ্রুপ/Blood Group </label></span>
    <span class="l1"><input type="text" name="blood" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<span class="l1b"><label>পিতা/স্বামী/Father/Husband</label></span>
<span class="l1"><input type="text" name="father_husband" />
<span class="l12"><label>প্রদান </label></span>
<span class="l1"><input type="date" name="issue" /><br><br><br>

<span class="m2"><label>Validity</label></span>
<span class="l1"><input type="date" name="validity" /><br><br><br>


    
    <span class="l1a"><label>License no. </label></span>
    <span class="l1"><input type="text" name="license" />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br> <br>
    <br>
        
        
    <span class="l1l"><label>Issue Authority </label></span>
    <span class="l1l"><input type="text" name="authority" />
    <p>Please fill out the information</p>

    <input type="submit" name="btnInfo" value="Insert" />
</div>
</div>






</body>
</html>