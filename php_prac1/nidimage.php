
<?php
session_start();
require_once("conn_db.php");

if (isset($_POST['Insert'])){

    $file= $_FILES['image']['btnInfo'];

    $query = "INSERT INTO nid_info(web_project) VALUES('$file')";
    $res = mysqli_query($con,$query);
    if ($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
    }



}
    



?>