<?php

//getting data from our form

if (isset($_POST['submit'])) {

    include'../Config.php';

    $Artist_name = $_POST['Artistname'];
    $Artist_address = $_POST['Address'];
    $Artist_phone = $_POST['phone'];
    $Artist_email = $_POST['email'];
    $Artist_age = $_POST['age'];
   
    // insert Art getting data= dynamically from browser and add it to database
    mysqli_query($conn , "insert into artist ( `artist_name` , `artist_address`, `artist_phone` ,   `artist_email`, `age` ) values ('$Artist_name', '$Artist_address', '$Artist_phone','$Artist_email','$Artist_age')");

}

?>

<html>
    <h1>Successfully Added Artist</h1>
</html>