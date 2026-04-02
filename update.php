<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit user</title>
    </head>
    <body>
        
        <h1>Edit User</h1>
        <a href="index.php"> List</a><br>
        
        <?php
        include "db.php";
        $id = $GET["id"];
        
        $result = $conn->query("SELECT * FROM users WHERE id=$id");
        $user = $result->fetch_assoc();
        
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $course = $_POST["course"];
            
            $sql = "UPDATE users SET name='$name', email='$email', course='$course' WHERE id=$id";
            if($conn->query(sql)){
                echo "<p>User Update Sucessful</P>";
            } else {
                echo 'failed';
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
            <button type="submit">Update User</button>
            </form>
    </body>
</html>
            

