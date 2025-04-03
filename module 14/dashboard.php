<?php
   include_once('config.php');
   if(empty($_SESSION['username'])){
       header('Location: index.php');
       $sql="SELECT * FROM users";
         $selectUsers=$conn->prepare($sql);
         $selectUsers->execute();

            $users_data=$selectUsers->fetchAll();

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>




    <style>
        
        table
        {
            border: 1px solid black;
        }


        tr,td,th
        {
            border: 1px solid black;
            
        }
        table,tr,td
        {
            border-collapse: collapse;
        }
        td
        {
            padding: 10px;
        }


    </style>
</head>
<body>
    <nav class = "navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard</a>
        

    </nav>

    
        <?php
            include_once('config.php');
            $getUsers=$conn->prepare("SELECT * FROM users");
            $getUsers->execute();
            $users=$getUsers->fetchAll();
        ?>




     <table>
        <thead>
            
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Update</th>
            </tr>
    </thead>
     <?php
     foreach($users as $user){
        ?>
     <tr>
        <td><?=$user['id']?></td>
        <td><?=$user['username']?></td>
        <td><?=$user['name']?></td>
        <td><?=$user['surname']?></td>
        <td><?=$user['email']?></td>
        <td><?= "<a  herf='delete.php?id=$user[id]'>Edit</a>"?></td>
     </tr>
       <?php
        }
        ?>


     </table>


     <a href="index.php">Add User</a>
     <a></a>
    
</body>
</html>