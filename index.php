<?php

function input($key){
    if(isset($_POST[$key])){
        return $_POST[$key];
    }
    return 0;
}


function isSubmit($key){
    return isset($_POST[$key]);
}

function KubusLuas()
{
    $panjang = 0;

    if (isSubmit("submit")) {
        $panjang = input("sisi");
        $hasilLuas =  6 * pow($panjang, 2);
        echo $hasilLuas . ' ' . 'satuan';
    } else {
        echo  $hasilLuas = 0;
    }
}

function KubusVol()
{
    if (isSubmit("submit")) {
        $panjang = input("sisi");
        $hasilVol =  pow($panjang, 3);
        echo $hasilVol . ' ' . 'satuan';
    } else {
        echo   $hasilVol = 0;
    }
}

function BalokLuas()
{
    if (isSubmit("submit-balok")) {
        $panjang = input("panjang");
        $lebar = input("lebar");
        $tinggi = input("tinggi");
        $hasilLuasBalok =  2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));
        echo $hasilLuasBalok . ' ' . 'satuan';
    } else {
        echo  $hasilLuasBalok = 0;
    }
}

function BalokVol()
{
    if (isSubmit("submit-balok")) {
        $panjang = input("panjang");
        $lebar = input("lebar");
        $tinggi = input("tinggi");
        $hasilVolBalok = $panjang * $lebar * $tinggi;
        echo $hasilVolBalok . ' ' . 'satuan';
    } else {
        echo   $hasilVolBalok = 0;
    }
}

function PrismaLuas()
{
    if (isSubmit("submit-prisma")) {
        $sisi1 = input("sisi1");
        $sisi2 = input("sisi2");
        $sisi3 = sqrt(pow($sisi1, 2) + pow($sisi2, 2));
        $tinggi = input("tinggiprisma");
        $luasPrisma = (2 * ($sisi1 * $sisi2 / 2)) + (($sisi1 + $sisi2 + $sisi3) * ($tinggi));
        echo $luasPrisma . ' ' . 'satuan';
    } else {
        echo $luasPrisma = 0;
    }
}

function PrismaVol()
{
    if (isSubmit("submit-prisma")) {
        $sisi1 = input("sisi1");
        $sisi2 = input("sisi2");
        $tinggi = input("tinggiprisma");
        $volAlasPrisma =  ($sisi1 * $sisi2 / 2) * $tinggi;

        echo $volAlasPrisma . ' ' . 'satuan';
    } else {
        echo $volAlasPrisma = 0;
    }
}

function LimasSegitigaLuas()
{
    if (isSubmit("submit-limassegitiga")) {
        $alas = input("alas");
        $tinggialas = input("tinggialas");
        $tinggilimas = input("tinggilimas");
        $tinggisisimiring = input("tinggisisimiring");
        $hasilLuasLimasSegitiga = ((0.5 * $alas * $tinggialas) + (3 * 0.5 * $tinggialas * $tinggisisimiring));
        echo $hasilLuasLimasSegitiga . ' ' . 'satuan';
    } else {
        echo  $hasilLuasLimasSegitiga = 0;
    }
}

function LimasSegitigaVolume()
{
    if (isSubmit("submit-limassegitiga")) {
        $alas = input("alas");
        $tinggialas = input("tinggialas");
        $tinggilimas = input("tinggilimas");
        $tinggisisimiring = input("tinggisisimiring");
        $hasilVolumeLimasSegitiga = (0.33 * (0.5 * $alas * $tinggialas) * $tinggilimas);
        echo $hasilVolumeLimasSegitiga . ' ' . 'satuan';
    } else {
        echo  $hasilVolumeLimasSegitiga = 0;
    }
}

function LimasSegiempatLuas()
{
    if (isSubmit("submit-limassegiempat")) {
        $sisialas = input("sisialas");
        $tinggilimas2 = input("tinggilimas2");
        $tinggisisimiring2 = input("tinggisisimiring2");
        $hasilLuasLimasSegiempat = (0.33 * ($sisialas * $sisialas) * $tinggilimas2);
        echo $hasilLuasLimasSegiempat . ' ' . 'satuan';
    } else {
        echo  $hasilLuasLimasSegiempat = 0;
    }
}

function LimasSegiempatVolume()
{
    if (isSubmit("submit-limassegiempat")) {
        $sisialas = input("sisialas");
        $tinggilimas2 = input("tinggilimas2");
        $tinggisisimiring2 = input("tinggisisimiring2");
        $hasilLuasLimasSegiempat = (($sisialas * $sisialas) + (4 * 0.5 * $sisialas * $tinggisisimiring2 ));
        echo $hasilLuasLimasSegiempat . ' ' . 'satuan';
    } else {
        echo  $hasilLuasLimasSegiempat = 0;
    }
}


function tabungVolumeLuasPermukaan()
{
    if(isSubmit("submit-tabungan")){
        $jari = input("jari");
        $tinggi = input("tinggi");
        $hasilVolumeTabung = (3.14 * pow($jari, 2) * $tinggi);
        $hasilLuasPermukaanTabung = (2 * 3.14 * $jari * ($jari + $tinggi));
      
    }else{
        $hasilVolumeTabung = 0;
        $hasilLuasPermukaanTabung = 0;
    }
}


function capsuleVolumeLuasPermukaan(){
    if(isSubmit("submit-capsule")){
        $jari = input("jari");
        $tinggi = input("tinggi");
        $hasilVolumeCapsule = (3.14 * pow($jari, 2) * $tinggi);
        $hasilLuasPermukaanCapsule = (2 * 3.14 * $jari * ($jari + $tinggi));
    }else{
        $hasilVolumeCapsule = 0;
        $hasilLuasPermukaanCapsule = 0;
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
    <section  class="col-sm-12 py-5">
            <div class="container">
                <div class="row  d-flex justify-content-center ">
                    <!-- card 1 balok -->
                    <section id="kubus" class="col-md-10 mb-5">
                        <form action="#kubus" method="POST">
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
                                                <input type="text" name="sisi" value="<?=input("sisi")?>" class="form-control form-control-sm" id="inputSisi" placeholder="Input Sisi Kubus">
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
                        </form>
                    </section>

                    <!-- Balok -->
                    <section id="balok" class="col-md-10 mb-5">
                        <form action="#balok" method="POST">
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
                                                <input type="text" name="panjang" value="<?=input("panjang")?>" class="form-control form-control-sm" id="inputPanjang" placeholder="Input Panjang">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputLebar" class="col-sm-3 col-form-label">Lebar</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="lebar" value="<?=input("lebar")?>" class="form-control form-control-sm" id="inputLebar" placeholder="Input Lebar">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputTinggi" class="col-sm-3 col-form-label">Tinggi</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tinggi" value="<?=input("tinggi")?>" class="form-control form-control-sm" id="inputTinggi" placeholder="Input tinggi">
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
                        </form>
                    </section>

                    <!-- Prisma segitiga -->
                    <section id="prismasegitiga" class="col-md-10 mb-5">
                        <form action="#prismasegitiga" method="POST">
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
                                                <input type="text" name="sisi1" value="<?=input("sisi1")?>" class="form-control form-control-sm" id="sisi1" placeholder="Sisi alas segitiga dari (AB/AC/CB)">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="sisi2" class="col-sm-3 col-form-label">Sisi alas</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sisi2" value="<?=input("sisi2")?>" class="form-control form-control-sm" id="sisi2" placeholder="Sisi tinggi alas segitiga dari (AB/AC/CB)">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputTinggiprisma" class="col-sm-3 col-form-label">Tinggi</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tinggiprisma" value="<?=input("tinggiprisma")?>" class="form-control form-control-sm" id="inputTinggiprisma" placeholder="Input tinggi">
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
                        </form>
                    </section>
                    
                    <!-- Limas Segitiga -->
                    <section id="limassegitiga" class="col-md-10 mb-5">
                        <form action="#limassegitiga" method="POST">
                        <div class="card" style="overflow: hidden;">
                            <div class="card-header bg-primary text-light d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Limas Segitiga</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <img src="https://imgix2.ruangguru.com/assets/miscellaneous/png_hdbuf1_9083.PNG" alt="LimasSegitiga" style="height: 130px;">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="mb-1 row">
                                            <label for="inputAlas" class="col-sm-3 col-form-label">Alas</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="alas" value="<?=input("alas")?>" class="form-control form-control-sm" id="inputAlas" placeholder="Input Alas">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputTinggiAlas" class="col-sm-3 col-form-label">Tinggi Alas</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tinggialas" value="<?=input("tinggialas")?>" class="form-control form-control-sm" id="inputTinggiAlas" placeholder="Input Tinggi Alas">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputTinggiLimas" class="col-sm-3 col-form-label">Tinggi Limas</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tinggilimas" value="<?=input("tinggilimas")?>" class="form-control form-control-sm" id="inputTinggiLimas" placeholder="Input Tinggi Limas">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputTinggiSisiMiring" class="col-sm-3 col-form-label">Tinggi Sisi Miring</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tinggisisimiring" value="<?=input("tinggisisimiring")?>" class="form-control form-control-sm" id="inputTinggiSisiMiring" placeholder="Input Tinggi Sisi Miring">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Luas</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php
                                                    LimasSegitigaLuas();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class=" mb-1 row">
                                            <label class="col-sm-2 col-md-3 col-form-label">Volume</label>
                                            <div class="col-sm-9 col-md-9 mt-1">
                                                <h3>
                                                    <?php
                                                    LimasSegitigaVolume();
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/PemWeb/TugasPertemuan9/" class="btn btn-md btn-danger">Hapus</a>
                                            <button type="submit" name="submit-limassegitiga" value="submit" class="btn btn-md btn-primary">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>

                    <!-- Limas Segiempat -->
                    <section id="limassegiempat" class="col-md-10 mb-5">
                        <form action="#limassegiempat" method="POST">
                            <div class="card" style="overflow: hidden;">
                                <div class="card-header bg-primary text-light d-flex justify-content-center align-items-center">
                                    <h5 class="card-title">Limas Segiempat</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                            <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/21/limas-segi-empat.jpeg?w=287" alt="LimasSegiempat" style="height: 130px;">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="mb-1 row">
                                                <label for="inputSisiAlas" class="col-sm-3 col-form-label">Sisi Alas</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="sisialas" value="<?=input("sisialas")?>"  class="form-control form-control-sm" id="inputSisiAlas" placeholder="Input Sisi Alas">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputTinggiLimas2" class="col-sm-3 col-form-label">Tinggi Limas</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tinggilimas2" value="<?=input("tinggilimas2")?>" class="form-control form-control-sm" id="inputTinggiLimas2" placeholder="Input Tinggi Limas">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputTinggiSisiMiring2" class="col-sm-3 col-form-label">Tinggi Sisi Miring</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tinggisisimiring2" value="<?=input("tinggisisimiring2")?>"  class="form-control form-control-sm" id="inputTinggiSisiMiring2" placeholder="Input Tinggi Sisi Miring">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label class="col-sm-2 col-md-3 col-form-label">Luas</label>
                                                <div class="col-sm-9 col-md-9 mt-1">
                                                    <h3>
                                                        <?php
                                                        LimasSegiempatLuas();
                                                        ?>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class=" mb-1 row">
                                                <label class="col-sm-2 col-md-3 col-form-label">Volume</label>
                                                <div class="col-sm-9 col-md-9 mt-1">
                                                    <h3>
                                                        <?php
                                                        LimasSegiempatVolume();
                                                        ?>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <a href="/PemWeb/TugasPertemuan9/" class="btn btn-md btn-danger">Hapus</a>
                                                <button type="submit" name="submit-limassegiempat" value="submit" class="btn btn-md btn-primary">Hitung</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    
                </div>
            </div>
    </section>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
