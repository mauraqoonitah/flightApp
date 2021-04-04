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
                <h2 class="text-center p-5">Detail Penerbangan</h2>
                <form class="row g-3 col-md-6 mx-auto box shadow">
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Maskapai</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Dari</label>
                        <select id="inputCity" class="form-select">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Ke</label>
                        <select id="inputState" class="form-select">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Harga Tiket</label>
                        <input type="number" class="form-control" id="inputAddress" placeholder="Rp">
                    </div>

                    <button type="submit" class="btn btn-success mt-4 mb-4">
                        <i class="bi bi-search"></i>
                        Cari</button>

                </form>
            </div>
        </section>
        <section class="hasil-rute" id="hasil-rute">
            <div class="container-sm mt-5 mb-5 pb-5">
                <h2 class="text-center p-5">Rute Tersedia</h2>
                <form class="row g-3 col-md-8 mx-auto box shadow">


                    <div class="col-md-4">
                        <i class="fas fa-circle mini"></i>
                        <i class="fas fa-circle mini"></i>
                        <i class="fas fa-circle mini"></i>
                        <i class="fas fa-plane"></i>
                        <br>
                        <label for="" class="form-label mt-2"> Adam Air</label>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-12">
                            <i class="fas fa-circle"></i>
                            <label for="inputEmail4" class="form-label">Soekarno-Hatta (CGK)</label>
                        </div>
                        <i class="fas fa-circle dot"></i>
                        <br>
                        <i class="fas fa-circle dot"></i>
                        <i class="fas fa-arrow-down"></i>
                        <br>
                        <i class="fas fa-circle dot"></i>
                        <div class="col-md-12">
                            <i class="fas fa-circle"></i>
                            <label for="inputEmail4" class="form-label">Sultan Iskandarmuda (BTJ)</label>
                            </g>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="col-md-12">
                            <p class="form-label fs-6 fw-light">Harga Tiket: </p>
                            <label for="" class="form-label">Rp200000</label>
                        </div>
                        <div class="col-md-12">
                            <p class="form-label fs-6 fw-light">Pajak: </p>
                            <label for="" class="form-label">Rp100000</label>
                        </div>
                        <hr>
                        <div class="col-md-12 ">
                            <p class="form-label fs-6 fw-bold">Total : </p>
                            <label for="" class="form-label total">Rp1500000</label>
                        </div>


                    </div>


                </form>
            </div>
        </section>
    </main>

</body>

</html>