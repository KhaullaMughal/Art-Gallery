<?php

//getting data from our form

if (isset($_POST['submit'])) {

    include'Config.php';

    $Art_name = $_POST['Aname'];
    $Art_price = $_POST['Aprice'];
    $Art_artist = $_POST['Aartist'];
    $Art_category = $_POST['Acategory'];
    $Art_image = $_FILES['Apicture'];
    $image_loc = $_FILES['Apicture']['tmp_name']; //image location dikhayega
    $image_name = $_FILES['Apicture']['name'];//image ka name btayega
    $image_des = "UploadImage/".$image_name; //jb hmne isse folder me bheja tb concatenate krwaya


    move_uploaded_file( $image_loc , "UploadImage/".$image_name );

    // insert Art getting data= dynamically from browser and add it to database
    mysqli_query($conn , "insert into artwork( `art_name` , `price`, `artist_id` , `category_id` , `image`) values ('$Art_name', '$Art_price', '$Art_artist','$Art_category','$image_des')");

}

?>

