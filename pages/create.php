<!DOCTYPE html>
<html>
<head>
    <title>Create</title>

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
    <form action="php/createdata.php" method="POST">
        <h5 class="px-2 pt-2 fw-bold">Data Create</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan nomor NIK">
                </div>
                <div class="mb-3">
                    <label for="nm" class="form-label">Nama</label>
                    <input type="text" name="nm" id="nm" class="form-control" placeholder="Masukkan nama">
                </div>
                <div class="mb-3">
                    <label for="almt" class="form-label">Alamat</label>
                    <input type="text" name="almt" id="almt" class="form-control" placeholder="Masukkan alamat">
                </div>
                <div class="mb-3">
                    <label for="jkl" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jkl" id="jkl">
                        <option value="" disabled selected>Pilih jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="skl" class="form-label">Skill</label>
                    <select class="form-select" name="skl" id="skl">
                        <option value="" disabled selected>Pilih skill</option>
                        <option value="Skill Suhu">Skill Suhu</option>
                        <option value="Skill Sedang">Skill Sedang</option>
                        <option value="Skill Pemula">Skill Pemula</option>
                    </select>
                </div>
                <button name="daftar" type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>
    <form action="proses/create_rps.php" method="POST">
            <h5 class="px-2 pt-2 fw-bold">Buat RPS Baru</h5>
            <div class="d-flex flex-row">
                <div class="form-group p-2">
                    <label for="matkul" class="form-label">Matkul</label>
                    <input type="text" name="matkul" id="matkul" class="form-control mb-2" placeholder="Masukkan nama Matkul">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control mb-2" placeholder="Masukkan deskripsi">
                    <label for="materi1" class="form-label">Meteri 1</label>
                    <input type="text" name="materi1" id="materi1" class="form-control mb-2" placeholder="Masukkan materi 1">
                    <label for="materi2" class="form-label">Meteri 2</label>
                    <input type="text" name="materi2" id="materi2" class="form-control mb-2" placeholder="Masukkan materi 2">
                    <label for="materi3" class="form-label">Meteri 3</label>
                    <input type="text" name="materi3" id="materi3" class="form-control mb-2" placeholder="Masukkan materi 3">
                    <label for="materi4" class="form-label">Meteri 4</label>
                    <input type="text" name="materi4" id="materi4" class="form-control mb-2" placeholder="Masukkan materi 4">
                    <label for="materi5" class="form-label">Meteri 5</label>
                    <input type="text" name="materi5" id="materi5" class="form-control mb-2" placeholder="Masukkan materi 5">
                    <label for="materi6" class="form-label">Meteri 6</label>
                    <input type="text" name="materi6" id="materi6" class="form-control mb-2" placeholder="Masukkan materi 6">
                    <label for="materi7" class="form-label">Meteri 7</label>
                    <input type="text" name="materi7" id="materi7" class="form-control mb-2" placeholder="Masukkan materi 7">
                    <label for="materi8" class="form-label">Meteri 8</label>
                    <input type="text" name="materi8" id="materi8" class="form-control mb-2" placeholder="Masukkan materi 8">
                    <label for="materi9" class="form-label">Meteri 9</label>
                    <input type="text" name="materi9" id="materi9" class="form-control mb-2" placeholder="Masukkan materi 9">
                    <label for="materi10" class="form-label">Meteri 10</label>
                    <input type="text" name="materi10" id="materi10" class="form-control mb-2" placeholder="Masukkan materi 10">
                    <label for="materi11" class="form-label">Meteri 11</label>
                    <input type="text" name="materi11" id="materi11" class="form-control mb-2" placeholder="Masukkan materi 11">
                    <label for="materi12" class="form-label">Meteri 12</label>
                    <input type="text" name="materi12" id="materi12" class="form-control mb-2" placeholder="Masukkan materi 12">
                    <label for="materi13" class="form-label">Meteri 13</label>
                    <input type="text" name="materi13" id="materi13" class="form-control mb-2" placeholder="Masukkan materi 13">
                    <label for="materi14" class="form-label">Meteri 14</label>
                    <input type="text" name="materi14" id="materi14" class="form-control mb-2" placeholder="Masukkan materi 14">
                </div>
            </div>
            <button name="daftar" type="submit" class="btn btn-primary">SUBMIT</i></button>
        </form>
</main>

</body>
</html>
