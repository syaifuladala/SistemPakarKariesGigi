<?php
    include("header.php");
?>

    <form action="kalkulasi.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="label">Email</label>
                <input type="text" class="form-control" name="idpasien" placeholder="ID Pasien">
            </div>
            <div class="form-group col-md-6">
                <label class="label">Password</label>
                <input type="text" class="form-control" name="namapasien" placeholder="Nama Pasien">
            </div>
        </div>
        
        <label class="label">Kedalaman Lubang</label>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lubang" value="kecil" id="lubang1">
                    <label class="form-check-label" for="lubang1">
                        Kecil (kurang dari 5 mm)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lubang" value="sedang" id="lubang2">
                    <label class="form-check-label" for="lubang2">
                        Sedang (4-8 mm)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lubang" value="dalam" id="lubang3">
                    <label class="form-check-label" for="lubang3">
                        Dalam (lebih dari 7 mm)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="dalamlubang" placeholder="Kedalaman">
                    <div class="input-group-prepend">
                        <div class="input-group-text">mm</div>
                    </div>
                </div>
            </div>
        </div>

        <label class="label">Rasa Nyeri</label>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nyeri" value="biasa" id="nyeri1">
                    <label class="form-check-label" for="nyeri1">
                        Nyeri Biasa (10-40%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nyeri" value="agak" id="nyeri2">
                    <label class="form-check-label" for="nyeri2">
                        Agak Nyeri (30-70%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nyeri" value="sangat" id="nyeri3">
                    <label class="form-check-label" for="nyeri3">
                        Sangat Nyeri (60-100%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="nilainyeri" placeholder="Nilai">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
            </div>
        </div>

        <label class="label">Rasa Ngilu</label>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ngilu" value="berdenyut-denyut" id="ngilu1">
                    <label class="form-check-label" for="ngilu1">
                        Berdenyut-denyut (10-50%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ngilu" value="terus-menerus" id="ngilu2">
                    <label class="form-check-label" for="ngilu2">
                        Terus-Menerus (40-80%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ngilu" value="spontan" id="ngilu3">
                    <label class="form-check-label" for="ngilu3">
                        Spontan (70-100%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="nilaingilu" placeholder="Nilai">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
            </div>
        </div>

        <label class="label">Rasa yang semakin sakit jika diberi rangsangan (stimulus)</label>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="stimulus" value="tidak" id="stimulus1">
                    <label class="form-check-label" for="stimulus1">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="stimulus" value="ya" id="stimulus2">
                    <label class="form-check-label" for="stimulus2">
                        Ya
                    </label>
                </div>
            </div>
        </div>

        <label class="label">Warna Lubang Gigi</label>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="warna" value="putih" id="warna1">
                    <label class="form-check-label" for="warna1">
                        Putih (10-30%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="warna" value="coklat" id="warna2">
                    <label class="form-check-label" for="warna2">
                        Coklat (20-70%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="warna" value="hitam" id="warna3">
                    <label class="form-check-label" for="warna3">
                        Hitam (60-100%)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="nilaiwarna" placeholder="Nilai">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
            </div>
        </div>

        <label class="label">Tambalan pada Gigi</label>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tambalan" value="tidak" id="tambal1">
                    <label class="form-check-label" for="tambal1">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tambalan" value="ya" id="tambal2">
                    <label class="form-check-label" for="tambal2">
                        Ada
                    </label>
                </div>
            </div>
        </div>

        <label class="label">Nafas Tidak Sedap atau Bau Mulut</label>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bau" value="tidak" id="bau1">
                    <label class="form-check-label" for="bau1">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bau" value="ya" id="bau2">
                    <label class="form-check-label" for="bau2">
                        Ya
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Kalkulasi</button>
    </form>


<?php
    include("footer.php");
?>