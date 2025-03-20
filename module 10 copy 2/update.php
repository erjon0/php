<?php
include_once("config.php");

    if(isset($_POST['update'])){
        $id = $_POST['id'];
    
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];	
        $surname=$_POST['surname'];
        $password=$_POST['password'];
    
        $sql = ( "UPDATE users SET name='$name',age='$age',email='$email',surname='$surname',password='$password' WHERE id=$ids");
        $query = $conn->prepare($sql);
        $sql->bindParam(':name', $name, PDO::PARAM_STR);
        $sql->bindParam(':age', $age, PDO::PARAM_INT);  
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':surname', $surname, PDO::PARAM_STR);
        $sql->bindParam(':password', $password, PDO::PARAM_STR);
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    
    
        header("Location: index.php");
        

    }
	
   
    

?>
