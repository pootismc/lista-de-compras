<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];

    $sql = "INSERT INTO crud "."(name) "."VALUES "."('$name')";

    $result =mysqli_query($con,$sql);
           

    if($result){
        echo "Data inserted";
    }else{
        die(mysqli_error($con));
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <title>Items</title>
</head>
<body>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label class="my-5">Item name</label>
            <input type="text" class="form-control" placeholder="Enter item name" name="name">
        </div>
        <button type="submit" class="btn btn-primary my-5" name="submit">Submit</button>
    </form>  
    </div>   
</body>
</html>