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
        <!-- fetch data -->
<div class="container border border-2 mt-5 shadow p-3 mb-5 bg-white rounded">
<table class="table table-hover">
<thead class="heading">
    <th>ID</th>
    <th>Name</th>
    <th>Username</th>
    <th>password</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    
</thead>

<tbody>
    <?php
    include'../Config.php';
    $record = mysqli_query($conn , "select * from Customer");
    while($row = mysqli_fetch_array($record)){
        echo"
        <tr>
    <td>$row[c_id]</td>
    <td>$row[c_name]</td>
    <td>$row[c_username]</td>
    <td>$row[c_password]</td>
    <td>$row[c_gender]</td>
    <td>$row[c_address]</td>
    <td>$row[c_phone]</td>
    <td>$row[c_email]</td>
    </tr>
        ";
    }
    ?>

</tbody>

</table>
<div class="row">
    <div class = "text-center"><button><a href="../MyArtGallery.php">Back to home</a></button></div>
</div>
</div>


</body>
</html>

<style>
    div button a{
        text-decoration: none;
        color: white;
    }
    div button{
        background-color: #4CAF50;
        border: none;
        height: 40px;
        border-radius: 30px;
    }
</style>