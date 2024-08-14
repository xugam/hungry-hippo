<?php
    // $email = $_GET['email'];
    // $password = $_GET['password'];
    // echo "Email:".$email."Password:".$password;
    //YYYY-MM-DD
    $hostname = "localhost";
    $db_username = "root";
    $db_password = "sugam@123";
    $db_name = "hungry_hippo";
    $conn = mysqli_connect($hostname, $db_username, $db_password, $db_name);
    $expiryDate = $_GET['expiryDate'];
    $name = $_GET['name'];
    $imageURL = $_GET['imageURL'];
    $price = $_GET['price'];
    if($_GET['recommendedForKid']=='on'){
        $recommendedForKid = 1;
    }
    else{
        $recommendedForKid = 0;

    }
    echo $recommendedForKid;

    
    //$date = date("y-m-d");
    $sql = "INSERT into foods(name, expiryDate, price, imageURL, recommendedForKid) values('$name','$expiryDate','$price','$imageURL','$recommendedForKid')";
    //$sql = "update foods set price = 0.55,category ='Fruit',ingredients='Pineapples',nutritionInfo='Calories: 452, Fat: 0 g, Carbs: 11g', recommendedForKid = '1' where id = 11";
    
    $result = mysqli_query($conn,$sql);
    if(!$result){
        die("database error");
    }
    header("Location:/index.php");
    ?>