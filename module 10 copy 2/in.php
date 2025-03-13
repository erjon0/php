<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="user">Name:</label>
        <input type="text" id="user" name="user" placeholder="user" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="email" required>
        <br>
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" placeholder="surname" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="age" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>