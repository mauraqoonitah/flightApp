<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicon-->
    <link href="./gambar/icon.png" rel="shortcut icon" type="image/icon" />
    <!-- my css -->
    <link rel="stylesheet" href="./library/css/style.css">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Flight</title>
</head>

<body>
    <?php
    $data = file_get_contents("./data/data.json");
    $data_arr = json_decode($data, true);
    ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./gambar/icon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                <span class="navbar-brand mb-0 h5">Flight</span>
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#pendaftaran">Daftar</a>
                    <a class="nav-link" href="#hasil-rute">Rute</a>
                </div>

            </div>
        </div>
    </nav>


    <!-- heroes -->
    <section id="heroes">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="./gambar/icon.png" alt="" width="72" height="72">
            <h1 class="display-5 fw-bold">Flight</h1>
            <div class="col-lg-6 mx-auto">
                <p class="mb-5 fs-4">Daftarkan penerbangan dengan maskapai terbaikmu <br>dan Rencanakan perjalanan dengan akses ke berbagai rute penerbangan!</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="#pendaftaran" type="button" class="btn btn-lg px-4 me-sm-3 btn-heroes text-white">Daftar Penerbangan</a>
                    <a href="#hasil-rute" type="button" class="btn btn-lg px-4 btn-heroes-outline fw-bold">Lihat Rute Penerbangan</a>
                </div>
            </div>
        </div>
    </section>
    <main>

        <!-- =============== SECTION PENDAFTARAN RUTE PENERBANGAN ================= -->
        <section id="pendaftaran">
            <div class="container-sm mt-5">
                <h2 class="text-center p-5">Pendaftaran Rute Penerbangan</h2>
                <!-- Form pendaftaran rute -->
                <form action="" method="POST" class="row g-3 col-md-6 mx-auto box shadow">
                    <div class="col-md-12">
                        <label for="maskapai" class="form-label fw-bold">Maskapai</label>
                        <input type="text" name="maskapai" class="form-control" id="maskapai">


                    </div>
                    <!-- form bandara asal -->
                    <div class="form-group col-md-6">
                        <label for="asalBandara" class="form-label fw-bold">Bandara Asal</label>
                        <select id="asalBandara" class="form-select" name="asalBandara">
                            <option selected>Pilih...</option>
                            <option>Soekarno-Hatta (CGK)</option>
                            <option>Husein Sastranegara (BDO)</option>
                            <option>Abdul Rachman Saleh (MLG)</option>
                            <option>Juanda (SUB)</option>
                        </select>
                    </div>

                    <!-- form bandara tujuan -->
                    <div class="form-group col-md-6">
                        <label for="tujuanBandara" class="form-label fw-bold">Bandara Tujuan</label>
                        <select id="tujuanBandara" class="form-select" name="tujuanBandara">
                            <option selected>Pilih...</option>
                            <option>Ngurah Rai (DPS)</option>
                            <option>Hasanuddin (UPG)</option>
                            <option>Inanwatan (INX)</option>
                            <option>Sultan Iskandarmuda (BTJ)</option>
                        </select>
                    </div>

                    <!-- form harga tiket -->
                    <div class="form-group col-md-12">
                        <label for="inputAddress" class="form-label fw-bold">Harga Tiket</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="hargaTiket" class="form-control">
                        </div>
                    </div>

                    <!-- button submit form -->
                    <button type="submit" name="submit" value="submit" class="btn btn-heroes my-4 text-white">
                        SUBMIT</button>
                </form>
            </div>
        </section>

        <?php
        // rincian pajak bandara asal
        $PajakBandaraAsal = [
            ["Soekarno-Hatta (CGK)", 50000],
            ["Husein Sastranegara (BDO)", 30000],
            ["Abdul Rachman Saleh (MLG)", 40000],
            ["Juanda (SUB)", 40000]
        ];


        // rincian pajak bandara tujuan
        $PajakBandaraTujuan = [
            ["Ngurah Rai (DPS)", 80000],
            ["Hasanuddin (UPG)", 70000],
            ["Inanwatan (INX)", 90000],
            ["Sultan Iskandarmuda (BTJ)", 70000],
        ];

        // kondisi jika tombol submit diklik
        if (isset($_POST['submit'])) {
            // ambil data yang telah diinput
            $maskapai = $_POST['maskapai'];
            $asalBandara = $_POST['asalBandara'];
            $tujuanBandara = $_POST['tujuanBandara'];
            $hargaTiket = $_POST['hargaTiket'];

            // menentukan jika kondisi input asal dan tujuan bandara sama dengan data di json (sesuai index), maka tentukan pajak asal dan tujuan nya

            for ($i = 0; $i < 4; $i++) {
                if ($asalBandara == $PajakBandaraAsal[$i][0]) {
                    $pajakAsal = $PajakBandaraAsal[$i][1];
                }
                if ($tujuanBandara == $PajakBandaraTujuan[$i][0]) {
                    $pajakTujuan = $PajakBandaraTujuan[$i][1];
                }
            }
            $pajakTotal = $pajakAsal + $pajakTujuan;
            $hargaTotal = $pajakTotal + $hargaTiket;

            // tambah data baru berbentuk array
            $data_arr_baru = [
                $maskapai,
                $asalBandara,
                $tujuanBandara,
                $hargaTiket,
                $pajakTotal,
                $hargaTotal,
            ];
            // memasukkan data baru yang diinput, kedalam bentuk array
            array_push($data_arr, $data_arr_baru);

            // ubah array ke json format
            $data = json_encode($data_arr, JSON_PRETTY_PRINT);

            // masukkan data baru array ke dalam file data.json
            file_put_contents("./data/data.json", $data);
        }
        ?>

        <!-- =============== SECTION DAFTAR RUTE TERSEDIA ================= -->
        <section class="hasil-rute" id="hasil-rute">
            <div class="container-sm mt-5 mb-5 pb-5">
                <h2 class="text-center p-5">Daftar Rute Tersedia</h2>

                <!-- perulangan form hasil rute -->
                <?php foreach ($data_arr as $data) : ?>
                    <!-- form -->
                    <form action="" method="POST" class="row g-3 col-lg-6 mx-auto box shadow mt-4">
                        <div class="col-md-6 px-3">

                            <i class="fas fa-circle mini"></i>
                            <i class="fas fa-circle mini"></i>
                            <i class="fas fa-circle mini"></i>
                            <i class="fas fa-plane"></i>
                            <br>

                            <!-- =============== MASKAPAI ================= -->
                            <p class="form-content"> <?= $data[0]; ?></p>

                            <div class="col-lg-12">
                                <div class="line_style__content">

                                    <div class="line_style__item">
                                        <span class="line_style__round"></span>
                                        <span class="line_style__line"></span>
                                    </div>

                                    <!-- =============== ASAL BANDARA ================= -->
                                    <div>
                                        <p class="fw-bold"> <?= $data[1]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="line_style__content">

                                    <div class="line_style__item">
                                        <span class="line_style__rounder"></span>
                                    </div>
                                    <!-- =============== TUJUAN BANDARA ================= -->

                                    <div>
                                        <p class="fw-bold"> <?= $data[2]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 px-3">

                            <!-- =============== HARGA TIKET ================= -->
                            <div class="col-md-12 px-4 py-2">
                                <p class="form-label fs-6 fw-bold d-inline pb-5">Harga Tiket : </p>
                                <p class="fw-light d-inline"> Rp <?= $data[3]; ?></p>
                                <hr class="mt-2 mb-2">
                            </div>

                            <!-- =============== PAJAK ================= -->
                            <div class="col-md-12 px-4 py-2">
                                <p class="form-label fs-6 fw-bold d-inline">Pajak : </p>
                                <p class="fw-light d-inline">Rp <?= $data[4]; ?></p>
                                <hr class="mt-2 mb-2">
                            </div>

                            <!-- =============== TOTAL HARGA ================= -->
                            <div class="col-md-12 px-4 py-2">
                                <p class="total-label fs-6 fw-bold d-inline">Total: </p>
                                <p class="total d-inline"> Rp <?= $data[5]; ?></p>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>

        </section>
    </main>




</body>

<!-- navbar toggler collapse -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>