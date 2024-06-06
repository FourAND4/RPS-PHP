<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .profile-picture {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        border-radius: 50%;
    }
</style>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">
                <img src="hega resmi.jpg" alt="Profile Picture" class="profile-picture">
                Fourdan Hega Wijaya
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard.php"><strong>22.01.4835</a></li></strong>
                <li class="nav-item"><a class="nav-link" href="create.php">Add</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">List</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>

<main class="container mt-5">
    <div class="card p-2">
        <h5 class="px-2 pt-2 pb-2 fw-bold">DATA</h5>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Skill</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config/config.php';

                $sql = "SELECT * FROM dbdata"; 
                $result = mysqli_query($connect, $sql);
                $nomor = 1;

                if (!$result) {
                    die("Query failed: " . mysqli_error($connect));
                }

                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $row['nik']; ?></td>
                        <td><?php echo $row['nm']; ?></td>
                        <td><?php echo $row['almt']; ?></td>
                        <td><?php echo $row['jkl']; ?></td>
                        <td><?php echo $row['skl']; ?></td>
                        <td>
                            <a href='pages/edit.php?nik=<?php echo $row['nik']; ?>' class='btn btn-info'>EDIT</a>
                            <a href='proses/delform.php?nik=<?php echo $row['nik']; ?>' class='btn btn-danger'>DELETE</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

</body>
</html>
