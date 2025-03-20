<?php
include_once("config.php");

if(isset($_POST['update']))
{	
    $ids = $_POST['id'];
    
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];	
    $surname=$_POST['surname'];
    
    // checking empty fields
    if(empty($name) || empty($age) || empty($email) || empty($surname)) {	
            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }		
        if(empty($surname)) {
            echo "<font color='red'>Surname field is empty.</font><br/>";
        }

    } else {	
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}

?>
