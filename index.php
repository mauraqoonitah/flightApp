<?php
// Get the contents of the JSON file 
$data = file_get_contents("./data/data.json");
$data_arr = json_decode($data, true);
// var_dump($data_arr[1]); // print array
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicon-->
    <link href="./gambar/icon.png" rel="shortcut icon" type="image/ico" />
    <!-- my css -->
    <link rel="stylesheet" href="./library/css/style.css">
    <link rel="stylesheet" href="./library/css/all.css">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <title>Flight</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./gambar/icon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                <span class="navbar-brand mb-0 h5 ">Flight</span>
            </a>
        </div>

        </div>
    </nav>
    <main>

        <section class="pendaftaran">
            <div class="container-sm">
                <h2 class="text-center p-5">Pendaftaran Rute Penerbangan</h2>
                <form class="row g-3 col-md-6 mx-auto box shadow">
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Maskapai</label>
                        <input type="email" class="form-control" id="inputEmail4">

                    </div>
                    <div class="col-md-6">
                        <label for="asalBandara" class="form-label">Bandara Asal</label>
                        <select id="asalBandara" class="form-select">
                            <option selected>Pilih...</option>
                            <option>Soekarno-Hatta (CGK)</option>
                            <option>Husein Sastranegara (BDO)</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="tujuanBandara" class="form-label">Bandara Tujuan</label>
                        <select id="tujuanBandara" class="form-select">
                            <option selected>Pilih...</option>
                            <option>Sultan Iskandarmuda (BTJ)</option>
                            <option>Hasanuddin (UPG)</option>
                            <option>Ngurah Rai (DPS)</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Harga Tiket</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-4 mb-4">
                        <i class="bi bi-search"></i>
                        Tambah</button>

                </form>
            </div>
        </section>
        <section class="hasil-rute" id="hasil-rute">
            <div class="container-sm mt-5 mb-5 pb-5">
                <h2 class="text-center p-5">Daftar Rute Tersedia</h2>
                <?php foreach ($data_arr as $data) : ?>
                    <form class="row g-3 col-md-10 mx-auto box shadow mt-4">
                        <div class="col-md-4">
                            <i class="fas fa-circle mini"></i>
                            <i class="fas fa-circle mini"></i>
                            <i class="fas fa-circle mini"></i>
                            <i class="fas fa-plane"></i>
                            <br>
                            <p class="form-content"> <?= $data[0]; ?></p>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <i class="fas fa-circle"></i>
                                <p class="fw-bold"> <?= $data[1]; ?></p>

                            </div>
                            <i class="fas fa-circle dot"></i>
                            <br>
                            <i class="fas fa-circle dot"></i>
                            <!-- <i class="fas fa-arrow-down"></i> -->
                            <br>
                            <i class="fas fa-circle dot"></i>

                            <div class="col-md-12">
                                <br>
                                <i class="fas fa-circle"></i>
                                <p class="fw-bold"> <?= $data[2]; ?></p>
                                </g>
                            </div>
                        </div>

                        <div class="col-md-4 text-md-end">
                            <div class="col-md-12">
                                <p class="form-label fs-6 fw-bold">Harga Tiket: </p>
                                <p class="fw-light"> <?= $data[3]; ?></p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <p class="form-label fs-6 fw-bold">Pajak: </p>
                                <p class="fw-light"> <?= $data[4]; ?></p>
                                <hr>
                            </div>

                            <div class="col-md-12">
                                <p class="form-label fs-6 fw-bold">Total: </p>
                                <p class="total"> Rp<?= $data[3]; ?></p>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

</body>

</html>