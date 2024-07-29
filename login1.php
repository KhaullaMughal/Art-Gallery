<?php

$conn = mysqli_connect('localhost','root','Khaulla123!','art_gallery');

$Admin_username = $_POST['username'];
$Admin_password = $_POST['password'];

$result = mysqli_query($conn , "
select * from admin_login where Admin_username = '$Admin_username' and Admin_password = '$Admin_password'
");

//session start

session_start();

//if username and password is correct
//mysqli num row check k kuch data hai b ya ni 
if(mysqli_num_rows($result)){

    $_SESSION['Admin_username'] = $Admin_username; //session created

    echo "
    <script>alert('Login Success');
    window.location.href = '../MyArtGallery.php';
    </script>
    ";
}
else{
    echo "
    <script>alert('Enter Valid Information');
    window.location.href = 'login.php';</script>
    ";
}
?>