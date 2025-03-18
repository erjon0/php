<?php 

include_once("config.php");


    $id = $_POST['id'];

    $sql = "SELECT * FROM users WHERE id = '$id'";

    $prep = $conn->prepare($sql);

    $prep->bind_param(":id", $id);
    
    $prep->execute();

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <style>
            fotm>input{
                margin-bottom: 10px;
                font-size: 20px;
                padding: 10px;
            
            }
          button{
                font-size: 20px;
                padding: 10px;
                background-color: green;
                color: white;
                border: none;
                cursor: pointer;
            }
        </style>

        <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="text" name="name" value="<?php echo $data['name']; ?>">
        <input type="text" name="surname" value="<?php echo $data['surname']; ?>">
        <input type="text" name="email" value="<?php echo $data['email']; ?>">   
        <input type="number" name="age" value="<?php echo $data['age']; ?>">
        <button type="submit" name="update ">update</button>

        </form>


        
    </body>
    </html>

    
    
 