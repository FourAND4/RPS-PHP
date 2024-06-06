<!DOCTYPE html>
<html>

<head>
    <title>MENGEDIT</title>

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
                    <img src="picture/hega resmi.jpg" alt="Profile Picture" class="profile-picture">
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
        <h1>EDIT DATA</h1>

        <?php
        include('config/config.php');

        if (isset($_GET['nik'])) {
            $nik = $_GET['nik'];

            $sql = "SELECT * FROM dbdata WHERE nik = '$nik'";
            $result = mysqli_query($connect, $sql);

            if ($result && $row = mysqli_fetch_assoc($result)) {
                $record_id = $row['nik'];
            } else {
                echo "Record not found.";
            }
        }
        ?>

        <form action="php/edform.php" method="POST">
            <input type="hidden" name="nik" value="<?php echo $record_id; ?>">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="new_nik" class="form-control bg-dark text-white" value="<?php echo $record_id; ?>">
            </div>
            <div class="mb-3">
                <label for="nm" class="form-label">Nama</label>
                <input type="text" name="nm" class="form-control" value="<?php echo $row['nm']; ?>">
            </div>
            <div class="mb-3">
                <label for="almt" class="form-label">Alamat</label>
                <input type="text" name="almt" class="form-control" value="<?php echo $row['almt']; ?>">
            </div>
            <div class="mb-3">
                <label for="jkl" class="form-label">Jenis Kelamin</label>
                <select name="jkl" class="form-select">
                    <option value="Laki-laki" <?php echo ($row['jkl'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php echo ($row['jkl'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="skl" class="form-label">Skill</label>
                <select name="skl" class="form-select">
                    <option value="Skill Suhu" <?php echo ($row['skl'] == 'Skill Suhu') ? 'selected' : ''; ?>>Skill Suhu</option>
                    <option value="Skill Sedang" <?php echo ($row['skl'] == 'Skill Sedang') ? 'selected' : ''; ?>>Skill Sedang</option>
                    <option value="Skill Pemula" <?php echo ($row['skl'] == 'Skill Pemula') ? 'selected' : ''; ?>>Skill Pemula</option>
                </select>
            </div>
            <button name="update" type="submit" class="btn btn-primary">SUBMIT</i></button>
        </form>
    </main>

</body>

</html>
