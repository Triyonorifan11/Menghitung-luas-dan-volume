<?php
function KubusLuas()
{
    $panjang = 0;

    if (isset($_POST["submit"])) {

        $panjang = $_POST["sisi"];
        $hasilLuas =  6 * pow($panjang, 2);
        echo $hasilLuas . ' ' . 'satuan';
    } else {
        echo  $hasilLuas = 0;
    }
}

function KubusVol()
{
    if (isset($_POST["submit"])) {
        $panjang = $_POST["sisi"];
        $hasilVol =  pow($panjang, 3);
        echo $hasilVol . ' ' . 'satuan';
    } else {
        echo   $hasilVol = 0;
    }
}

function BalokLuas()
{
    if (isset($_POST["submit-balok"])) {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $tinggi = $_POST["tinggi"];
        $hasilLuasBalok =  2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));
        echo $hasilLuasBalok . ' ' . 'satuan';
    } else {
        echo  $hasilLuasBalok = 0;
    }
}

function BalokVol()
{
    if (isset($_POST["submit-balok"])) {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $tinggi = $_POST["tinggi"];
        $hasilVolBalok = $panjang * $lebar * $tinggi;
        echo $hasilVolBalok . ' ' . 'satuan';
    } else {
        echo   $hasilVolBalok = 0;
    }
}

function PrismaLuas()
{
    if (isset($_POST["submit-prisma"])) {
        $sisi1 = $_POST["sisi1"];
        $sisi2 = $_POST["sisi2"];
        $sisi3 = sqrt(pow($sisi1, 2) + pow($sisi2, 2));
        $tinggi = $_POST["tinggiprisma"];
        $luasPrisma = (2 * ($sisi1 * $sisi2 / 2)) + (($sisi1 + $sisi2 + $sisi3) * ($tinggi));
        echo $luasPrisma . ' ' . 'satuan';
    } else {
        echo $luasPrisma = 0;
    }
}

function PrismaVol()
{
    if (isset($_POST["submit-prisma"])) {
        $sisi1 = $_POST["sisi1"];
        $sisi2 = $_POST["sisi2"];
        $tinggi = $_POST["tinggiprisma"];
        $volAlasPrisma =  ($sisi1 * $sisi2 / 2) * $tinggi;

        echo $volAlasPrisma . ' ' . 'satuan';
    } else {
        echo $volAlasPrisma = 0;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas Pertemuan 9</title>
</head>

<body>
    <!-- navbar -->
    <section class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <div class="container-fluid">
                    <h5 class="col-sm-12 text-light">Menghitung Luas dan Volume Bangun Ruang</h5>
                </div>
            </div>
        </nav>
    </section>

    <!-- content -->
    <section class="col-sm-12 py-5">
        <form action="" method="POST">
            <div class="container">
                <div class="row  d-flex justify-content-center ">
                    <!-- card 1 balok -->
                    <div class="col-md-10 mb-5">
                        <div class="card" style="overflow: hidden;">
                            <div class="card-header bg-primary text-light d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Kubus</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <img src="https://cdn.medcom.id/dynamic/content/2022/04/13/1413159/0ZwCKUtJdv.JPG?w=480" alt="Kubus" style="width: 240px;">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="mb-1 row">
                                            <label for="inputSisi" class="col-sm-3 col-form-label">Sisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sisi" class="form-control form-control-sm" id="inputSisi" placeholder="Input Sisi Kubus">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Luas</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php
                                                    KubusLuas();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class=" mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Volume</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php
                                                    KubusVol();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/PemWeb/TugasPertemuan9/" class="btn btn-md btn-danger">Hapus</a>
                                            <button type="submit" name="submit" value="submit" class="btn btn-md btn-primary">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Balok -->
                    <div class="col-md-10 mb-5">
                        <div class="card" style="overflow: hidden;">
                            <div class="card-header bg-primary text-light d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Balok</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <img src="https://www.99.co/blog/indonesia/wp-content/uploads/2022/04/sisi-balok.jpg" alt="Balok" style="height: 130px;">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="mb-1 row">
                                            <label for="inputPanjang" class="col-sm-3 col-form-label">Panjang</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="panjang" class="form-control form-control-sm" id="inputPanjang" placeholder="Input Panjang">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputLebar" class="col-sm-3 col-form-label">Lebar</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="lebar" class="form-control form-control-sm" id="inputLebar" placeholder="Input Lebar">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputTinggi" class="col-sm-3 col-form-label">Tinggi</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tinggi" class="form-control form-control-sm" id="inputTinggi" placeholder="Input tinggi">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Luas</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php

                                                    BalokLuas();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class=" mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Volume</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php
                                                    BalokVol();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/PemWeb/TugasPertemuan9/" class="btn btn-md btn-danger">Hapus</a>
                                            <button type="submit" name="submit-balok" value="submit" class="btn btn-md btn-primary">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prisma segitiga -->
                    <div class="col-md-10 mb-5">
                        <div class="card" style="overflow: hidden;">
                            <div class="card-header bg-primary text-light d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Prisma Segitiga</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCj__HnNll4oTqSQZpTXcFv6r1QsY6ljVC1CsuX514HHRjqwKIaB65tif6NKiJOnLfnaY&usqp=CAU" alt="Prisma Segitiga" style="height: 200px;">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="mb-1 row">
                                            <label for="sisi1" class="col-sm-3 col-form-label">Sisi alas</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sisi1" class="form-control form-control-sm" id="sisi1" placeholder="Sisi alas segitiga dari (AB/AC/CB)">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="sisi2" class="col-sm-3 col-form-label">Sisi alas</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sisi2" class="form-control form-control-sm" id="sisi2" placeholder="Sisi tinggi alas segitiga dari (AB/AC/CB)">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputTinggiprisma" class="col-sm-3 col-form-label">Tinggi</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tinggiprisma" class="form-control form-control-sm" id="inputTinggiprisma" placeholder="Input tinggi">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Luas</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php
                                                    PrismaLuas();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class=" mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Volume</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php
                                                    PrismaVol();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/PemWeb/TugasPertemuan9/" class="btn btn-md btn-danger">Hapus</a>
                                            <button type="submit" name="submit-prisma" value="submit" class="btn btn-md btn-primary">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>