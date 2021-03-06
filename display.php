<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <title>Crud operation</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="item.php" class="text-light">Add Item</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

            <?php

            $sql = "SELECT * FROM crud";
            $result =mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $name=$row['name'];
                    echo '<tr>
                    <td>'.$name.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php?updatename='.$name.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deletename='.$name.'" class="text-light">Delete</a></button>
                </td>
                </tr>';
                }
            }else{
                die(mysqli_error($con));
            }

            ?>
            </tbody>
        </table>
    </div>
</body>
</html>