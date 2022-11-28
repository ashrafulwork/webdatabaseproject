<?php 
require_once("nid_cardaction.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID CARD</title>
    <link rel="stylesheet" href="waduhek.css">
</head>
<body>
    <div class="container">
        <div class="front">
        
        
            <img src="gv.png" id="img1">
           <p id="sp1">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>
          <p id="sp2">Government of the People`s Republic of Bangladesh</p>
          <p id="sp3">জাতীয় পরিচয়পত্র / National ID Card</p><hr>
          
            <img src="ph1.jpg" id ="img2">
            <img src="flag.png" id ="img21">
            
            <p id="p1">Ashraful</p>
            
          


            <?php if($data>0){
					
                    ($recShow = mysqli_fetch_object($qryShow))
                                    
            ?>
           
            <p id="p2">নাম</p> <p id="pn1"><?php echo $recShow->name1; ?></p>
            <p id="p3">Name</p><p id="pn2"><?php echo $recShow->name2; ?></p>
            <p id="p4">পিতা </p><p id="pn3"><?php echo $recShow->father; ?></p>
            <p id="p5">মাতা</p><p id="pn4"><?php echo $recShow->mother; ?></p>
            <p id="p6">Date of Birth&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="pn5"><?php echo $recShow->date; ?></span></p>
            <p id="p7">NID No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="pn6"><?php echo $recShow->nid; ?></span></p> 
            
            <?php }?>

          
            <img src="sim.jpg" id ="img3">
           
           
            
            



				

            

            
           
         

        </div>
        <div class="back">
           <p id="p6">If found please return to  :</p><hr>
          

            <h1 id="p7">BUBT</h1>
            <p id="p8">
            Mirpur-2,Dhaka-1216.<br>
            Phone: 9024266,9020132-4,<br>
            9024277,9015397<br>
            Cell: 01741129235,<br>
            01967169189<br>
            Email: info@bubt.edu.bd,<br>
            Website: bubt.edu.bd
        </p>
        <img src="qr.jpg" id="img4">
        <p id="p9">0009684044 147, 50252</p><br>
        <p id="p10">Registar</p>
        </div>
    </div>
</body>
</html>