<?php

    include "database.php";

    $db = new Database;

    $id = $_GET["id"];

    if(isset($_POST['submit'])) {
        $result = $db->edit($id, $_POST['nama'], $_POST['umur'], $_POST['alamat']);
        if($result) {
            header("Location: tampil.php?msg=Berhasil Mengubah Data Mahasiswa");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 bg-secondary">
        Edit mahasiswa
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <p class="text-muted">Ubah Data Yang Ingin Dirubah Pada Form </p>
        </div>

            <?php
                $result = $db->tampilById($id);
                $row = mysqli_fetch_assoc($result);
            ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px">
                <div class="row">
                    <div class="col">
                        <label class="form-label">nama :</label>
                        <input type="text" class="form-control" name="nama" placeholder="Budi Santoso" value="<?php echo $row['nama'] ?>" required>
                    </div>

                    <div class="col">
                        <label class="form-label">umur :</label>
                        <input type="number" class="form-control" name="umur" placeholder="17" value="<?php echo $row['umur'] ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat :</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Jl. Sudirma" value="<?php echo $row['alamat'] ?>" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                </div>

            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>