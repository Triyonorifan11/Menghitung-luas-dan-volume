<?php
function kapsulVolume(){
    if(isSubmit("submit-kapsul")){
        $jari = input("rKapsul");
        $tinggi = input("tKapsul");
        $PHI = $jari % 7 == 0 ? 22/7 : 3.1415926535898;
        $hasilVolumeKapsul = 4/3 * $PHI * pow($jari,3)+ $PHI * pow($jari,2) * $tinggi;
        return round($hasilVolumeKapsul,2) . " Satuan";
    }else{
        return 0 . " Satuan";
    }
}

function kapsulLuasPermukaan(){
    if(isSubmit("submit-kapsul")){
        $jari = input("rKapsul");
        $tinggi = input("tKapsul");
        $PHI = $jari % 7 == 0 ? 22/7 : 3.1415926535898;
        $hasilLuasPermukaanKapsul = 4 * $PHI * pow($jari,2) + 2 * $PHI * $jari * $tinggi;
        return round($hasilLuasPermukaanKapsul,2) . " Satuan";
    }else{
        return 0 . " Satuan";
    }
}
?>
<section id="kapsul" class="col-md-10 mb-5">
    <form action="#kapsul" method="POST">
        <div class="card" style="overflow: hidden;">
            <div class="card-header bg-primary text-light d-flex justify-content-center align-items-center">
                <h5 class="card-title">Kapsul</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/capsule.png" alt="LimasSegiempat" style="height: 130px;">
                    </div>
                    <div class="col-lg-9">
                        <div class="mb-1 row">
                            <label for="inputRadiusKapsul" class="col-md-3 col-form-label">Jari-jari</label>
                            <div class="col-md-9">
                                <input type="text" name="rKapsul" value="<?=input("rKapsul")?>"  class="form-control form-control-sm" id="inputRadiusKapsul" placeholder="Input Jari-jari Alas">
                            </div>
                        </div>
                        <div class="mb-1 row">
                            <label for="inputTinggiKapsul" class="col-md-3 col-form-label">Tinggi Kapsul</label>
                            <div class="col-md-9">
                                <input type="text" name="tKapsul" value="<?=input("tKapsul")?>" class="form-control form-control-sm" id="inputTinggiKapsul" placeholder="Input Tinggi Kapsul">
                            </div>
                        </div>
                        <?php if(isSubmit("submit-kapsul")) :?>
                        <div class="mb-1 row">
                            <label class="col-sm-2 col-md-3 col-form-label">Luas</label>
                            <div class="col-md-9 col-md-9 mt-1">
                                <h3>
                                    <?=kapsulVolume()?>
                                </h3>
                            </div>
                        </div>
                        <div class=" mb-1 row">
                            <label class="col-sm-2 col-md-3 col-form-label">Volume</label>
                            <div class="col-md-9 col-md-9 mt-1">
                                <h3>
                                    <?=kapsulLuasPermukaan()?>
                                </h3>
                            </div>
                        </div>
                        <?php endif;?>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <?php if(isSubmit("submit-kapsul")) :?>
                                <a href="" class="btn btn-md btn-danger">Hapus</a>
                            <?php endif;?>
                            <button type="submit" name="submit-kapsul" value="submit" class="btn btn-md btn-primary">Hitung</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>