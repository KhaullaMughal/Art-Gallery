<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    
</head>

<?php

session_start();

if(!$_SESSION['Admin_username']){
    //agr admin login ni krpata to redirect to login page admin
    header("location:form/login.php");
}


?>

<body>
    <!-- navigation bar -->
    <nav>
        <div class="navbar">
            <div class="navbar-brand ms-5 text-light"><img src="logo.png" alt="" height="60px" width="60px" style="border-radius:50%;"><span class="ms-2 logo text-light">Art </span>Station</div>

            <ul class="nav me-3">
                <li class="nav-items m-3 ">
                    <a href="" class="nav-link"><span><i class="fa-solid fa-user-tie"></i></span> Hello, <?php echo $_SESSION['Admin_username'];?></a>
                </li>
                <li class="nav-items m-3"><a href="form/logout.php" class="nav-link"><span><i class="fa-solid fa-right-from-bracket"></i></span>logout</a></li>
                <li class="nav-items m-3"><a href="../User/index.php" class="nav-link">User-Panel</a></li>
            </ul>
        </div>
    </nav>

    <!-- Admin Dashboard -->
    <!-- <div class="container border border-2 mt-5">
        <div class="row text-center mt-3"><h1>Dashboard</h1></div>
        <div class="row mt-0">
            <div class="col-lg-6 col-md-6 col-12 text-center"><div class="info border border-2 p-4 ms-5 w-75"><a href="#">Add Art</a></div></div>
            <div class="col-lg-6 col-md-6 col-12 text-center"><div class="info border border-2 w-75 p-4 me-5" ><a href="">Add Artist</a></div></div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-lg-6 col-md-6 col-12 text-center"><div class="info border border-2 w-75 p-4 ms-5">
            <a href="">Check Users</a></div>
        </div>
            <div class="col-lg-6 col-md-6 col-12 text-center">
                <div class="info border border-2 w-75 p-4 me-5"><a href="">Check Orders</a></div></div>
            </div>
</div> -->
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 ">
                <img src="bg3.png" alt="" height="500px" width="500px">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="inner m-2">
                <div class="row">
                    <div class="text-center mt-3 mb-2"><h1>Dashboard</h1></div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-12 "><div class="text-center info "><a href="http://localhost/ArtGallery/admin/Art/Art.php" class="link">Add Art</a></div></div>
                    <div class="col-lg-6 col-md-12 "><div class="text-center info "><a href="../admin/Artist/Artist.php" class="link">Add Artist</a></div></div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6 col-md-12 "><div class="text-center info "><a href="../admin/UserAdd/GetUserDetails.php" class="link">Check Users</a></div></div>
                    <div class="col-lg-6 col-md-12 "><div class="text-center info "><a href="" class="link">Check Orders</a></div></div>
                </div>
            </div>
            </div>
        </div>
        </div>

</body>
</html>
<style>

    .navbar{
        background-color: #1b263b;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
    }
    .nav-link{
        color: white;
        text-decoration: none;
    }
    .nav-link:hover{
        color: white;
        text-decoration: none;
        background-color: #415a77;
    }
    .logo{
        font-family: fantasy;
        color: #2d3436;
    }
    .info{
        height: 150px;
        width: 200px;
        background-color: #415a77;
        margin-left: 30px;
        border-radius: 20px;
        padding: 50px;
        margin: 20px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    .link{
        font-size: 20px;
        font-family: 'poppins',sans-serif;
        color: #edf2f4;
        text-decoration: none;
    }
    h1{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        color: #073b4c;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
    }
</style>