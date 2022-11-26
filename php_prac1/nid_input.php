<?php session_start(); ?>
<h1>NID FORM</h1>

<html lang="en">
<head>
<link rel="stylesheet" href="3.css">
<link rel="stylesheet" href="nid_input1.css">
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
<form action="nid_insert.php" method="post" enctype="multipart">
<div class="div1">
    <div class="div2">
        <br>
<span class="l1a"><label>নাম </label></span>
<span class="l1"><input type="text" name="name1" />
<span class="l11"><label>Name </label></span>
<span class="l1"><input type="text" name="name2" /><br><br><br><br>
<span class="l1b"><label>পিতা </label></span>
<span class="l1"><input type="text" name="father" />
<span class="l12"><label>মাতা </label></span>
<span class="l1"><input type="text" name="mother" /><br><br><br>
<span class="m1"><label>Date of Birth</label></span>
<span class="l2"><input type="date" name="validity" />
<span class="m2"><label>Blood Group</label></span>
<span class="l1"><input type="text" name="blood" /><br><br><br><br>
<span class="m3"><label>NID No</label></span>
<span class="l1"><input type="text" name="nid" /><br><br>


    <p class="m4">Please fill out the information</p>

    <input type="submit" name="btnInfo" value="Insert"  class="m5"/><br><br><br>
   <span> <a href="/webdatabaseproject/php_prac1/nid_show.php" id="a1">Show NID DATABASE</a></span><br><br><br>
    <span><a href="/webdatabaseproject/php_prac1/" id="a2"> GO BACK TO HOME</a>	</span>
</div>
</div>






</body>
</html>