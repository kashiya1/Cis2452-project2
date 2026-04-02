<?php
        include 'db.php';
        
        $sql = "SELECT * FROM users ORDER BY created_at DESC";
        $result = $conn->query($sql);
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>
    <body>
        <h1>Users</h1>
        <a href="create.php"> New Users</a><br>
        
        <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row["id"])?></td>
                <td><?= htmlspecialchars($row["name"])?></td>
                <td><?= htmlspecialchars($row["email"])?></td>
                <td><?= htmlspecialchars($row["course"])?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"] ?>" Update</a>
                    <a href="delete.php?id=<?= $row["id"] ?>" Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <?php else: ?>
        <p> no users</p><!-- comment -->
        <?php endif; ?>
        
       
    </body>
</html>
