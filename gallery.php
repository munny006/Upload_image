<?php

include "Class/admin.php";
$obj_adminBack = new adminBack();
$image = $obj_adminBack->display_image();



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fluid Gallery HTML5 CSS3 Template</title>
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
    <a href="index.html" style="font-size: 30px; text-align: center; margin-top: 20px; margin-bottom: 20px; display: block; font-weight: bold;">Upload More Image</a>
    <?php

while ($image_data = mysqli_fetch_assoc($image)) {
   
    ?>
    <div class="grid-item">
        <figure class="effect-sadie">
            <img src="uploads/<?php echo $image_data['img_name'];?>" alt="Image">
            <figcaption>
                <h2><?php echo $image_data['title'];?></h2>
            </figcaption>
        </figure>
    </div>
<?php } ?>
</body>

</html>