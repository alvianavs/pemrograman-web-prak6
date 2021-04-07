<?php
require_once('koneksi.php');
$sql = "SELECT *FROM user";
$result = mysqli_query($konek, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5 p-3 border-0">
                    <h4 class="p-3">Records Regristasi</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">User ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $userid = $row['user_id'];
                                $username = $row['username'];
                                $email = $row['email'];
                                $age = $row['age'];
                            }
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $userid ?></th>
                                    <td><?php echo $username ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $age ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $userid ?>" class="btn btn-sm btn-success">Edit</a>
                                        <a href="delete.php?id=<?php echo $userid ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>