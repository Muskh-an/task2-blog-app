<?php

include "config.php";

$result = mysqli_query($conn, "SELECT * FROM posts");

?>
<!DOCTYPE html>
<html>

<head>
    <title>View Posts</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>All Posts</h2>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['title']; ?></td>

                <td><?php echo $row['content']; ?></td>

                <td><?php echo $row['created_at']; ?></td>

                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">
                        Edit
                    </a>

                    |

                    <a href="delete.php?id=<?php echo $row['id']; ?>">
                        Delete
                    </a>

                </td>

            </tr>

        <?php } ?>

    </table>

    <br>

    <a href="dashboard.php">Dashboard</a>
</body>

</html>