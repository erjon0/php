<?php
include_once 'config.php';

if(isset($_POST['submit'])) {
    $movie_name = $_POST['movie_name'];
    $movie_desc = $_POST['movie_desc'];
    $movie_quality = $_POST['movie_quality'];
    $movie_rating = $_POST['movie_rating'];
    $movie_image = $_FILES['movie_image']['name'];
    
    // Move the uploaded file to the desired directory
   
    
    // Insert the movie details into the database
    $sql = "INSERT INTO movies (name, description, quality, rating, image) VALUES (:name, :description, :quality, :rating, :image)";
    $insertMovie = $conn->prepare($sql);
    $insertMovie->bindParam(':name', $movie_name);
    $insertMovie->bindParam(':description', $movie_desc);
    $insertMovie->bindParam(':quality', $movie_quality);
    $insertMovie>bindParam(':rating', $movie_rating);
    $insertMovie->bindParam(':image', $movie_image);
    
    $insertMovie->execute();

    header("Location:list_movies.php?success=1");


    if($stmt->execute()) {
        echo "Movie added successfully!";
    } else {
        echo "Error adding movie.";
    }
}

?>