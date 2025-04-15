<?php
include_once('config.php');
$sql = "SELECT * FROM products";
$getProducts = $conn->prepare($sql);
$getProducts->execute();

$products_data = $getProducts->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 10</title>

    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td, th {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a href="#" class="navbar-brand col-sm-3 col-md-2 mr-0"> Welcome, <i><?php echo $_SESSION['username'];?></i></a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>


        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <ul class="sidebar-sticky">
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
    </nav>
            </div>
        </div>
        
        <?php


        include_once('config.php');
        

        $sql = "SELECT * FROM users";
        $getUsers = $conn->prepare($sql);
        $getUsers->execute();
        $users = $getUsers->fetchAll(PDO::FETCH_ASSOC);


        ?>
        <table>
            <thead>
               
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
            
            </thead>
            <tbody>

            </tbody>
             <tbody>
             <?php 
             
             foreach ($products_data as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['title'] ?></td>
        <td><?= $product['description'] ?></td>
        <td><?= $product['quantity'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><a href="update.php?id=<?= $product['id'] ?>">Update</a></td>
        <td><a href="delete.php?id=<?= $product['id'] ?>">Delete</a></td>
    </tr>
               <?php endforeach; ?>
                </tbody>
        </table>
        <a href="index.php">Add User</a>
</body> 
</html> 