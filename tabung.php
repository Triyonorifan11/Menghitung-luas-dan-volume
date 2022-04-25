
<?php

function tabungVolume()
{
    if(isSubmit("submit-tabung")){
        $jari = input("rTabung");
        $tinggi = input("tTabung");
        $PHI = $jari % 7 == 0 ? 22/7 : 3.1415926535898;
        $hasilVolumeTabung = ($PHI * pow($jari, 2) * $tinggi);
        return round($hasilVolumeTabung,2) . " Satuan";
    }else{
        return 0 ;
    }
}


function tabungLuasPermukaan(){
    if(isSubmit("submit-tabung")){
        $jari = input("rTabung");
        $tinggi = input("tTabung");
        $PHI = $jari % 7 == 0 ? 22/7 : 3.1415926535898;
        $hasilLuasPermukaanTabung = (2 * $PHI * $jari * ($jari + $tinggi));
        return round($hasilLuasPermukaanTabung,2) . " Satuan";
    }else{
        return 0 . " Satuan";
    }
}
?>

<!-- Tabung -->
<section id="tabung" class="col-md-10 mb-5">
    <form action="#tabung" method="POST">
        <div class="card" style="overflow: hidden;">
            <div class="card-header bg-primary text-light d-flex justify-content-center align-items-center">
                <h5 class="card-title">Tabung</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/cylinder.png" alt="LimasSegiempat" style="height: 130px;">
                    </div>
                    <div class="col-lg-9">
                        <div class="mb-1 row">
                            <label for="inputRadiusTabung" class="col-md-3 col-form-label">Jari-jari</label>
                            <div class="col-md-9">
                                <input type="text" name="rTabung" value="<?=input("rTabung")?>"  class="form-control form-control-sm" id="inputRadiusTabung" placeholder="Input Jari-jari Alas">
                            </div>
                        </div>
                        <div class="mb-1 row">
                            <label for="inputTinggiTabung" class="col-md-3 col-form-label">Tinggi Tabung</label>
                            <div class="col-md-9">
                                <input type="text" name="tTabung" value="<?=input("tTabung")?>" class="form-control form-control-sm" id="inputTinggiTabung" placeholder="Input Tinggi Tabung">
                            </div>
                        </div>
                        <?php if(isSubmit("submit-tabung")) :?>
                        <div class="mb-1 row">
                            <label class="col-sm-2 col-md-3 col-form-label">Luas</label>
                            <div class="col-md-9 col-md-9 mt-1">
                                <h3>
                                    <?=tabungVolume()?>
                                </h3>
                            </div>
                        </div>
                        <div class=" mb-1 row">
                            <label class="col-sm-2 col-md-3 col-form-label">Volume</label>
                            <div class="col-md-9 col-md-9 mt-1">
                                <h3>
                                    <?=tabungLuasPermukaan()?>
                                </h3>
                            </div>
                        </div>
                        <?php endif;?>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <?php if(isSubmit("submit-tabung")) :?>
                                <a href="" class="btn btn-md btn-danger">Hapus</a>
                            <?php endif;?>
                            <button type="submit" name="submit-tabung" value="submit" class="btn btn-md btn-primary">Hitung</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>