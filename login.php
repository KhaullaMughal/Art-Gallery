<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    
</head>
<body>
    <div class="container ">
        <div class="row mt-3">
            <div class="text-center"><h1>Admin Login</h1></div>
        </div>
    <form action="login1.php" method="POST">
        <div>
            <label for="form-label">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" class="form-control rounded-pill border border-dark">
        </div> 
        <div>
            <label for="form-label ms-5">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control rounded-pill border border-dark">
        </div>
        <div class=" my-4 ">
            <input type="submit" name="submit" id="submit" value="Login" class="form-control">
        </div> 
        </form>
    </div>
</body>
</html>
<style>
   .container{
    background-image: url(side4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    width: 400px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-top: 160px;
    animation: name 2s linear 0s 1 normal;
    border-radius: 30px;
    border: 2px solid #a29bfe;
   }
   body{
    background-image: url(bg1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
   }
   h1{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: #1b263b;
   }
   label{
    color: #1b263b;
    font-size: 13px;
    font-weight: bold;
   }
  input[type = "submit"]{
    background-color: #1b263b;
    color: white;
    border-radius: 20px;
    font-weight: bold;
    width: 50%;
    margin-left: 85px;
    
  }
  input[type = "submit"]:hover{
    background-color: white;
    color: #1b263b;
    border-radius: 20px;
    font-weight: bold;
    width: 50%;
    transform: scale(1.4);
  }
@keyframes name {
    from {
        transform: rotate(0deg);
    }
    to{
        transform: rotate(360deg);

    }
}

</style>