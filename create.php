<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add user</title>
    </head>
    <body>
        
        <h1>Add New User</h1>
        <a href="index.php"> User List</a><br>
        
        <?php
        include "db.php";
        
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $course = $_POST["course"];
            
            $sql = "INSERT INTO users (name, email, course) VALUES ('$name', '$email', '$course')";
                if($conn->query($sql)) {
                    echo "<p>user added</p>";
                } else{
                    echo"<p> no user added</p>";
                }
        }
            ?>
        
        <form method="POST">
            Name:
            <input type="text" name="name" required><br>
            Email:
            <input type="text" name="email" required><br>
             Course:
            <input type="text" name="course" required><br>
            </form>
    </body>
</html>


