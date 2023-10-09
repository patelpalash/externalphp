<?php
session_start();
$cn = mysqli_connect("localhost", "root", "", "external_p");
$rs = "";
if (isset($_REQUEST['search'])) {
    $text = $_POST['qry'];
    $rs = mysqli_query($cn, "SELECT * FROM application WHERE name LIKE '{$text}%' OR email LIKE '{$text}%' OR phone LIKE '{$text}%' OR address LIKE '{$text}%' OR skill LIKE '{$text}%'");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php">display</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form method="post">
        <div class="container mt-5" style="width:1100px;">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="qry" placeholder="Search by Name">
                <input class="btn btn-outline-dark" type="submit" name="search" value=" &#128269; "
                    id="button-addon2"></input>
            </div>
        </div>
    </form>
    <div class="container" style="width:1000px;">
        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Skills</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php
            if (isset($_REQUEST['search'])) {

                if (mysqli_num_rows($rs) > 0) {
                    while ($row = mysqli_fetch_assoc($rs)) {
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['phone']; ?>
                                </td>
                                <td>
                                    <?php echo $row['address']; ?>
                                </td>
                                <td>
                                    <?php echo $row['skill']; ?>
                                </td>
                                <td>
                                    <a href="display.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark">Delete</a>
                                    <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark">Update</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                    }
                } else {
                    echo "record not found";
                }
            }
            ?>
        </table>

    </div>
</body>

</html>