<?php
//defining the database variables
$hostname = "localhost";
$db_username = "root";
$db_password = "sugam@123";
$db_name = "hungry_hippo";

$conn = mysqli_connect($hostname, $db_username, $db_password, $db_name);
$query = "SELECT * FROM foods order by createdAt DESC;";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hungry Hippo | Roshan Shrestha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/add-product.php">Add product</a>
        </li>
       
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<div class="row row-cols-1 row-cols-md-4 g-4">
  <?php foreach($rows as $data):?>
    <div class="card text-bg-light text-center">
  <img src="<?= $data["imageURL"]?>" class="card-img" alt="...">
  <h5 class="name"><?= $data["name"];?></h5>
  
    <p class="price">Price: Rs <?= $data["price"] * 134;?></p>
    <p class="category">Category:<?= $data["category"];?></p>
    <p class="calories"><?php  $result=explode(",",$data["nutritionInfo"]);
    echo $result[0]?></p> 
  <span class="badge text-bg-info"><?php if($data["recommendedForKid"]==1)
      echo "Recommended for Kids.";?></span>
    <div class="card-footer">
    <button type="button" class="btn btn-success">Edit</button>
    <button type="button" class="btn btn-danger">Delete</button>
    
    </div>    
</div>  
  <?php endforeach; ?>
  </div>
  
  <!-- YOUR CODE FROM HERE! -->
  <!-- NO NEED TO CHANGE THE CODE ABOVE HTML -->

</body>

</html>