<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <?php
    include_once("php.php");
    $sql = "SELECT * FROM users";
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();
    ?>
    <table>
        <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Surname</th>
            <th>Email</th>
        </thead>
        <tbody>
        <?php
        foreach($users as $user){
            ?>
            <tr>
             "<tr>";
                "<td>"<?= $user['id']?></td>;
                "<td>"<?= $user['username']?></td>;
                "<td>"<?= $user['surname']?></td>;
                "<td>"<?= $user['email']?></td>;
             "</tr>";
            <
            <?php
        }
            
        ?>
    </tbody>
    </table>
    <a href="in.php">add</a>
</body>
</html>