<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

if(!$_SESSION['Admin_username']){
    //agr admin login ni krpata to redirect to login page admin
    header("location:form/login.php");
}


?>
<body>
<nav>
        <div class="navbar">
            <div class="navbar-brand ms-5 text-light"><img src="logo.png" alt="" height="60px" width="60px" style="border-radius:50%;"><span class="ms-2 logo text-light">Art </span>Station</div>

            <ul class="nav me-3">
                <li class="nav-items m-3 ">
                    <a href="" class="nav-link"><span><i class="fa-solid fa-user-tie"></i></span> Hello, <?php echo $_SESSION['Admin_username'];?></a>
                </li>
                <li class="nav-items m-3"><a href="../form/logout.php" class="nav-link"><span><i class="fa-solid fa-right-from-bracket"></i></span>logout</a></li>
                <li class="nav-items m-3"><a href="../User/index.php" class="nav-link">User-Panel</a></li>
            </ul>
        </div>
    </nav>
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
</style>