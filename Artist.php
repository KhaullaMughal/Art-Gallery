<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="row shadow p-3 mb-5 bg-white rounded">
            <div class="text-center mt-2"><h1>Add Artist Details</h1></div>
<!-- form field -->
        <form action="AddArtist.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="form-label">Name</label>
            <input type="text" name="Artistname" id="" placeholder="Enter the Art title" class="form-control">
        </div> 
        <div>
            <label for="form-label">Address</label>
            <input type="text" name="Address" id="" placeholder="Enter the Art price" class="form-control">
        </div> 
        <div>
            <label for="form-label">Phone</label>
            <input type="text" name="phone" id="" placeholder="Enter the Artist" class="form-control">
        </div> 
        <div>
            <label for="form-label">Email</label>
            <input type="email" name="email" id="" placeholder="Enter the category" class="form-control">
        </div> 
        <div>
            <label for="form-label">Age</label>
            <input type="text" name="age" id="" placeholder="Enter the Art name" class="form-control">
        </div> 
        <div class=" my-4">
            <input type="submit" name="submit" id="submit" value="Submit" class="form-control">
        </div> 
        </form>
            </div>
            </div>
            <div class="col-lg-7 col-md-7 text-center"><div class="ms-2 shadow-lg p-3 mb-5 bg-white rounded"><img src="artistpic.jpg" alt="" height="500px" width="600px"></div></div>
        </div>
        
    </div>


    <!-- fetch data -->
<div class="container border border-2 mt-5 shadow p-3 mb-5 bg-white rounded">
<table class="table table-hover">
<thead class="heading">
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Age</th>
    
</thead>

<tbody>
    <?php
    include'../Config.php';
    $record = mysqli_query($conn , "select * from artist
    ");
    while($row = mysqli_fetch_array($record)){
        echo"
        <tr>
    <td>$row[artist_id]</td>
    <td>$row[artist_name]</td>
    <td>$row[artist_address]</td>
    <td>$row[artist_phone]</td>
    <td>$row[age]</td>
    </tr>
        ";
    }
    ?>

</tbody>

</table>
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
    input[type="submit"]{
        background-color: #1b263b;
        color: antiquewhite;
        border-radius: 10px;
    }
    input[type="submit"]:hover{
        background-color: white;
        color: #1b263b;
        border-radius: 10px;
    }
    .heading{
        background-color: #1b263b;
        color: white;
    }
</style>