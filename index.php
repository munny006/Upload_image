<?php

include "Class/admin.php";
$obj_adminBack = new adminBack();
if (isset($_POST['btn'])) {

   $msg =  $obj_adminBack->upload_image($_POST);



    }


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body style="background: #fff;">

    <div class="container">
        <h1 class="display-3 my-3">Upload Your Image</h1>
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <?php
if (isset($msg)) {
    echo $msg;
}
 ?>
            <div class="form-group">
                <label>Image Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Select Image</label>
                <input type="file" name="files" class="form-control">
            </div>
            <input type="submit" name=
             "btn" value="Upload" class="btn btn-primary" style="cursor: pointer; font-size: 20px;">
        </form>
    </div>







    <!-- load JS files -->

    
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
</body>

</html>