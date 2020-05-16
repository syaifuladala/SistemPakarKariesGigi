<?php
    include("header.php");
?>

<?php
    echo '<pre>'; var_dump($_POST); echo '</pre>';
  
// NILAI KEANGGOTAAN
    // KEDALAMAN LUBANG
    $dalamlubang = $_POST['dalamlubang'];
    if ($_POST['lubang']=='kecil') {
        if ($dalamlubang < 4) {
            $nklubangkecil = 1;
            $nklubangsedang = 0;
            $nklubangdalam = 0;
        } else {
            $nklubangkecil = round(((5-$dalamlubang)/(5-4)),2);
            $nklubangdalam = 0;
            if ($dalamlubang < 5 && $dalamlubang > 4){
                $nklubangsedang = round((($dalamlubang-4)/(6-4)),2);
            } else{
                $nklubangsedang = 0;
            }
        }
    } else if($_POST['lubang']=='sedang') {
        if ($dalamlubang == 6) {
            $nklubangsedang = 1;
            $nklubangkecil = 0;
            $nklubangdalam = 0;
        } else if ($dalamlubang < 6 ){
            $nklubangsedang = round((($dalamlubang-4)/(6-4)),2);
            $nklubangdalam = 0;
            if ($dalamlubang > 4 && $dalamlubang < 5){
                $nklubangkecil = round(((5-$dalamlubang)/(5-4)),2);
            } else {
                $nklubangkecil = 0;
            }
        } else if ($dalamlubang > 6 ){
            $nklubangsedang = round(((8-$dalamlubang)/(8-6)),2);
            $nklubangkecil = 0;
            if ($dalamlubang > 7 && $dalamlubang < 8){
                $nklubangdalam = round((($dalamlubang-7)/(8-7)),2);
            } else {
                $nklubangdalam = 0;
            }
        }
    } else {
        if ($dalamlubang > 8) {
            $nklubangdalam = 1;
            $nklubangkecil = 0;
            $nklubangsedang = 0;
        } else {
            $nklubangdalam = round((($dalamlubang-7)/(8-7)),2);
            $nklubangkecil = 0;
            if ($dalamlubang > 7 && $dalamlubang < 8){
                $nklubangsedang = round(((8-$dalamlubang)/(8-6)),2);
            } else {
                $nklubangsedang = 0;
            }
        }
    }
    // RASA NYERI
    $nilainyeri = $_POST['nilainyeri'];
    if ($_POST['nyeri']=='biasa') {
        if ($nilainyeri < 10) {
            $nknyeribiasa = 1;
            $nknyeriagak = 0;
            $nknyerisangat = 0;
        } else {
            $nknyeribiasa = round(((40-$nilainyeri)/(40-10)),2);
            $nknyerisangat = 0;
            if ($nilainyeri > 30 && $nilainyeri <40){
                $nknyeriagak = round((($nilainyeri-30)/(50-30)),2);
            } else {
                $nknyeriagak = 0;
            }
        }
    } else if($_POST['nyeri']=='agak') {
        if ($nilainyeri == 50) {
            $nknyeriagak = 1;
            $nknyeribiasa = 0;
            $nknyerisangat = 0;
        } else if($nilainyeri < 50 ){
            $nknyeriagak = round((($nilainyeri-30)/(50-30)),2);
            $nknyerisangat = 0;
            if ($nilainyeri > 30 && $nilainyeri < 40){
                $nknyeribiasa = round(((40-$nilainyeri)/(40-10)),2);
            } else {
                $nknyeribiasa = 0;
            }
        } else if($nilainyeri > 50 ){
            $nknyeriagak = round(((70-$nilainyeri)/(70-50)),2);
            $nknyeribiasa = 0;
            if ($nilainyeri > 60 && $nilainyeri < 70){
                $nknyerisangat = round(((100-$nilainyeri)/(100-60)),2);
            } else {
                $nknyerisangat = 0;
            }
        }
    } else {
        $nknyerisangat = round(((100-$nilainyeri)/(100-60)),2);
        $nknyeribiasa = 0;
        if ($nilainyeri < 70){
            $nknyeriagak = round(((70-$nilainyeri)/(70-50)),2);
        } else {
            $nknyeriagak = 0;
        }
    }
    // RASA NGILU
    $nilaingilu = $_POST['nilaingilu'];
    if ($_POST['ngilu']=='berdenyut-denyut') {
        if ($nilaingilu < 10) {
            $nkngiludenyut = 1;
            $nkngiluterus = 0;
            $nkngiluspontan = 0;
        } else {
            $nkngiludenyut = round(((50-$nilaingilu)/(50-10)),2);
            $nkngiluspontan = 0;
            if ($nilaingilu > 40 && $nilaingilu < 50){
                $nkngiluterus = round((($nilaingilu-40)/(60-40)),2);
            } else {
                $nkngiluterus = 0;
            }
        }
    } else if($_POST['ngilu']=='terus-menerus') {
        if ($nilaingilu == 60) {
            $nkngiluterus = 1;
            $nkngiludenyut = 0;
            $nkngiluspontan = 0;
        } else if($nilaingilu < 60 ){
            $nkngiluterus = round((($nilaingilu-40)/(60-40)),2);
            $nkngiluspontan = 0;
            if ($nilaingilu > 40 && $nilaingilu < 50){
                $nkngiludenyut = round(((50-$nilaingilu)/(50-10)),2);
            } else {
                $nkngiludenyut = 0;
            }
        } else if($nilaingilu > 60 ){
            $nkngiluterus = round(((80-$nilaingilu)/(80-60)),2);
            $nkngiludenyut = 0;
            if ($nilaingilu > 70 && $nilaingilu < 80){
                $nkngiluspontan = round(((100-$nilaingilu)/(100-70)),2);
            } else {
                $nkngiluspontan = 0;
            }
        }
    } else {
        $nkngiluspontan = round(((100-$nilaingilu)/(100-70)),2);
        $nkngiludenyut = 0;
        if ($nilaingilu > 70 && $nilaingilu < 80){
            $nkngiluterus = round(((80-$nilaingilu)/(80-60)),2);
        } else {
            $nkngiluterus = 0;
        }
    }
    // STIMULUS
    if ($_POST['stimulus']=='ya') {
        $nkstimulusya = 1;
        $nkstimulustidak = 0;
    } else {
        $nkstimulusya = 0;
        $nkstimulustidak = 1;
    }
    // WARNA GIGI
    $nilaiwarna = $_POST['nilaiwarna'];
    if ($_POST['warna']=='putih') {
        if ($nilaiwarna < 10) {
            $nkwarnaputih = 1;
            $nkwarnacoklat = 0;
            $nkwarnahitam = 0;
        } else {
            $nkwarnaputih = round(((30-$nilaiwarna)/(30-10)),2);
            $nkwarnahitam = 0;
            if ($nilaiwarna > 20 && $nilaiwarna < 30){
                $nkwarnacoklat = $nilaiwarna-40/(60-40);
            } else {
                $nkwarnacoklat = 0;
            }
        }
    } else if($_POST['warna']=='coklat') {
        if ($nilaiwarna == 45) {
            $nkwarnacoklat = 1;
            $nkwarnahitam = 0;
            $nkwarnaputih = 0;
        } else if($nilaiwarna < 45 ){
            $nkwarnacoklat = round((($nilaiwarna-20)/(45-20)),2);
            $nkwarnahitam = 0;
            if ($nilaiwarna > 20 && $nilaiwarna < 30){
                $nkwarnaputih = round(((30-$nilaiwarna)/(30-10)),2);
            } else {
                $nkwarnaputih = 0;
            }
        } else if($nilaiwarna > 45 ){
            $nkwarnacoklat = round(((70-$nilaiwarna)/(70-45)),2);
            $nkwarnaputih = 0;
            if ($nilaiwarna > 60 && $nilaiwarna < 70){
                $nkwarnahitam = round(((100-$nilaiwarna)/(100-60)),2);
            } else {
                $nkwarnahitam = 0;
            }
        }
    } else {
        $nkwarnahitam = round(((100-$nilaiwarna)/(100-60)),2);
        $nkwarnaputih = 0;
        if ($nilaiwarna > 60 && $nilaiwarna < 70){
            $nkwarnacoklat = round(((70-$nilaiwarna)/(70-45)),2);
        } else {
            $nkwarnacoklat = 0;
        }
    }
    // TAMBALAN
    if ($_POST['tambalan']=='ya') {
        $nktambalanya = 1;
        $nktambalantidak = 0;
    } else {
        $nktambalanya = 0;
        $nktambalantidak = 1;
    }
    // BAU MULUT
    if ($_POST['bau']=='ya') {
        $nkbauya = 1;
        $nkbautidak = 0;
    } else {
        $nkbauya = 0;
        $nkbautidak = 1;
    }

// DEFUZZIFIKASI
// KARIES SUPERFISIALIS
    // R0
    $asp[0] = min($nklubangkecil,$nknyeribiasa);
    $zasp[0] = $asp[0]*100;
    // R1
    $asp[1] = min($nklubangkecil,$nkwarnaputih);
    $zasp[1] = $asp[1]*100;
    // R2
    $asp[2] = min($nklubangkecil,$nknyeribiasa, $nkwarnaputih);
    $zasp[2] = $asp[2]*100;
    // HASIL
    $terbagisp = 0; $pembagisp = 0;
    for ($i=0; $i<=2; $i++) { 
        $terbagisp = $terbagisp + ($asp[$i]*$zasp[$i]);
        $pembagisp = $pembagisp + $asp[$i];
    }
    if ($pembagisp == 0) {
        $superfisialis = 0;
    } else {
        $superfisialis = round(($terbagisp/$pembagisp),2);
    }

// KARIES SEKUNDER
    // R0
    $ask[0] = min($nklubangkecil,$nknyeribiasa,$nktambalanya);
    $zask[0] = $ask[0]*100;
    // R1
    $ask[1] = min($nklubangkecil,$nknyeribiasa,$nkwarnahitam,$nktambalanya,$nkbauya);
    $zask[1] = $ask[1]*100;
    // R2
    $ask[2] = min($nklubangsedang,$nknyeribiasa,$nktambalanya);
    $zask[2] = $ask[2]*100;
    // R3
    $ask[3] = min($nklubangsedang,$nknyeribiasa,$nkwarnahitam,$nktambalanya,$nkbauya);
    $zask[3] = $ask[3]*100;
    // R4
    $ask[4] = min($nklubangdalam,$nknyeribiasa,$nktambalanya);
    $zask[4] = $ask[4]*100;
    // R5
    $ask[5] = min($nklubangdalam,$nknyeribiasa,$nktambalanya,$nkbauya);
    $zask[5] = $ask[5]*100;
    // R6
    $ask[6] = min($nklubangdalam,$nknyeribiasa,$nkwarnahitam,$nktambalanya,$nkbauya);
    $zask[6] = $ask[6]*100;
    // HASIL
    $terbagisk = 0; $pembagisk = 0;
    for ($i=0; $i<=6; $i++) { 
        $terbagisk = $terbagisk + ($ask[$i]*$zask[$i]);
        $pembagisk = $pembagisk + $ask[$i];
    }
    if ($pembagisk == 0) {
        $sekunder = 0;
    } else {
        $sekunder = round(($terbagisk/$pembagisk),2);
    }

// KARIES PROFUNDA
    // R0
    $apf[0] = min($nklubangsedang,$nknyeriagak,$nkngiludenyut,$nkstimulusya,$nkwarnacoklat);
    $zpf[0] = $apf[0]*100;
    // R1
    $apf[1] = min($nklubangsedang,$nknyeriagak,$nkngiludenyut,$nkstimulusya,$nkwarnahitam);
    $zpf[1] = $apf[1]*100;
    // R2
    $apf[2] = min($nklubangsedang,$nknyeriagak,$nkngiluterus,$nkstimulusya,$nkwarnacoklat);
    $zpf[2] = $apf[2]*100;
    // R3
    $apf[3] = min($nklubangsedang,$nknyeriagak,$nkngiluterus,$nkstimulusya,$nkwarnahitam);
    $zpf[3] = $apf[3]*100;
    // R4
    $apf[4] = min($nklubangsedang,$nknyerisangat,$nkngiludenyut,$nkwarnacoklat);
    $zpf[4] = $apf[3]*100;
    // R5
    $apf[5] = min($nklubangsedang,$nknyerisangat,$nkngiludenyut,$nkstimulusya,$nkwarnacoklat);
    $zpf[5] = $apf[5]*100;
    // R6
    $apf[6] = min($nklubangsedang,$nknyerisangat,$nkngiludenyut,$nkstimulusya,$nkwarnahitam);
    $zpf[6] = $apf[6]*100;
    // R7
    $apf[7] = min($nklubangsedang,$nkngiluterus,$nkwarnahitam);
    $zpf[7] = $apf[7]*100;
    // R8
    $apf[8] = min($nklubangsedang,$nkngiluterus,$nkstimulusya,$nkwarnahitam);
    $zpf[8] = $apf[8]*100;
    // R9
    $apf[9] = min($nklubangsedang,$nknyerisangat,$nkngiluterus,$nkstimulusya,$nkwarnacoklat);
    $zpf[9] = $apf[9]*100;
    // R10
    $apf[10] = min($nklubangsedang,$nknyerisangat,$nkngiluterus,$nkstimulusya,$nkwarnahitam);
    $zpf[10] = $apf[10]*100;
    // HASIL
    $terbagipf = 0; $pembagipf = 0;
    for ($i=0; $i<=10; $i++) { 
        $terbagipf = $terbagipf + ($apf[$i]*$zpf[$i]);
        $pembagipf = $pembagipf + $apf[$i];
    }
    if ($pembagipf == 0) {
        $profunda = 0;
    } else {
        $profunda = round(($terbagipf/$pembagipf),2);
    }
// KARIES MEDIA
    // R0
    $amd[0] = min($nklubangsedang,$nknyeribiasa);
    $zmd[0] = $amd[0]*100;
    // R1
    $amd[1] = min($nklubangsedang,$nknyeriagak);
    $zmd[1] = $amd[1]*100;
    // R2
    $amd[2] = min($nklubangsedang,$nknyerisangat);
    $zmd[2] = $amd[2]*100;
    // R3
    $amd[3] = min($nklubangsedang,$nkngiludenyut);
    $zmd[3] = $amd[3]*100;
    // R4
    $amd[4] = min($nklubangsedang,$nkngiluterus);
    $zmd[4] = $amd[4]*100;
    // R5
    $amd[5] = min($nklubangsedang,$nkstimulusya);
    $zmd[5] = $amd[5]*100;
    // R6
    $amd[6] = min($nklubangsedang,$nkwarnacoklat);
    $zmd[6] = $amd[6]*100;
    // R7
    $amd[7] = min($nklubangsedang,$nkwarnahitam);
    $zmd[7] = $amd[7]*100;
    // R8
    $amd[8] = min($nklubangsedang,$nknyeribiasa,$nkngiludenyut,$nkwarnacoklat);
    $zmd[8] = $amd[8]*100;
    // R9
    $amd[9] = min($nklubangsedang,$nknyeriagak,$nkngiludenyut,$nkwarnacoklat);
    $zmd[9] = $amd[9]*100;
    // R10
    $amd[10] = min($nklubangsedang,$nknyeriagak,$nkngiludenyut,$nkstimulusya,$nkwarnacoklat);
    $zmd[10] = $amd[10]*100;
    // R11
    $amd[11] = min($nklubangsedang,$nknyeriagak,$nkngiludenyut,$nkstimulusya,$nkwarnahitam);
    $zmd[11] = $amd[11]*100;
    // R12
    $amd[12] = min($nklubangsedang,$nknyeribiasa,$nkstimulusya,$nkstimulusya,$nkwarnacoklat);
    $zmd[12] = $amd[12]*100;
    // R13
    $amd[13] = min($nklubangsedang,$nknyerisangat,$nkngiludenyut,$nkwarnacoklat);
    $zmd[13] = $amd[13]*100;
    // R14
    $amd[14] = min($nklubangsedang,$nknyerisangat,$nkngiludenyut,$nkstimulusya,$nkwarnacoklat);
    $zmd[14] = $amd[14]*100;
    // R15
    $amd[15] = min($nklubangsedang,$nknyerisangat,$nkngiludenyut,$nkstimulusya,$nkwarnahitam);
    $zmd[15] = $amd[15]*100;
    // R16
    $amd[16] = min($nklubangsedang,$nkngiluterus,$nkwarnahitam);
    $zmd[16] = $amd[16]*100;
    // R17
    $amd[16] = min($nklubangsedang,$nkngiluterus,$nkstimulusya,$nkwarnahitam);
    $zmd[16] = $amd[16]*100;
    // R18
    $amd[18] = min($nklubangsedang,$nknyerisangat,$nkngiluterus,$nkstimulusya,$nkwarnacoklat);
    $zmd[18] = $amd[18]*100;
    // R19
    $amd[19] = min($nklubangsedang,$nknyerisangat,$nkngiluterus,$nkstimulusya,$nkwarnahitam);
    $zmd[19] = $amd[19]*100;
    // HASIL
    $terbagimd = 0; $pembagimd = 0;
    for ($i=0; $i<=10; $i++) { 
        $terbagimd = $terbagimd + ($amd[$i]*$zmd[$i]);
        $pembagimd = $pembagimd + $amd[$i];
    }
    if ($pembagimd == 0) {
        $media = 0;
    } else {
        $media = round(($terbagimd/$pembagimd),2);
    }
?>

    <center>
    <div class="label">
        <table border="0" width="70%">
            <tr>
                <td width="20%">ID</td>
                <td width="30%" colspan="2"><?php echo $_POST['idpasien']; ?></td>
                <td width="20%">Nama</td>
                <td width="30%" colspan="2"><?php echo $_POST['namapasien']; ?></td>
            </tr>
        </table>
        <br>
    </div>
    <table class="table">
        <tr>
            <th width="40%">Parameter</th>
            <th width="30%">Tingkatan</th>
            <th width="30%">Nilai Keanggotaan Fuzzy</th>
        </tr>
        <tr>
            <td width="40%">Kedalaman Lubang</td>
            <td width="30%"><?php echo ucwords($_POST['lubang']); ?> </td>
            <td width="30%">
                Kecil (<?= $nklubangkecil ?>) <br>
                Sedang (<?= $nklubangsedang ?>) <br>
                Dalam (<?= $nklubangdalam ?>)
            </td>
        </tr>
        <tr>
            <td width="40%">Rasa Nyeri</td>
            <td width="30%"><?php echo ucwords($_POST['nyeri']); ?> </td>
            <td width="30%">
                Biasa (<?= $nknyeribiasa ?>) <br>
                Agak (<?= $nknyeriagak ?>) <br>
                Sangat (<?= $nknyerisangat ?>)
            </td>
        </tr>
        <tr>
            <td width="40%">Rasa Ngilu</td>
            <td width="30%"><?php echo ucwords($_POST['ngilu']); ?> </td>
            <td width="30%">
                Berdenyut (<?= $nkngiludenyut ?>) <br>
                Terus (<?= $nkngiluterus ?>) <br>
                Spontan (<?= $nkngiluspontan ?>)
            </td>
        </tr>
        <tr>
            <td width="40%">Efek Stimulus</td>
            <td width="30%"><?php echo ucwords($_POST['stimulus']); ?> </td>
            <td width="30%">
                Ya (<?= $nkstimulusya ?>) <br>
                Tidak (<?= $nkstimulustidak ?>)
            </td>
        </tr>
        <tr>
            <td width="40%">Warna Lubang</td>
            <td width="30%"><?php echo ucwords($_POST['warna']); ?> </td>
            <td width="30%">
                Putih (<?= $nkwarnaputih ?>) <br>
                Coklat (<?= $nkwarnacoklat ?>) <br>
                Hitam (<?= $nkwarnahitam ?>)
            </td>
        </tr>
        <tr>
            <td width="40%">Tambalan Gigi</td>
            <td width="30%"><?php echo ucwords($_POST['tambalan']); ?> </td>
            <td width="30%">
                Ya (<?= $nktambalanya ?>) <br>
                Tidak (<?= $nktambalantidak ?>)
            </td>
        </tr>
        <tr>
            <td width="40%">Bau Mulut</td>
            <td width="30%"><?php echo ucwords($_POST['bau']); ?> </td>
            <td width="30%">
                Ya (<?= $nkbauya ?>) <br>
                Tidak (<?= $nkbautidak ?>)
            </td>
        </tr>
    </table>
    <h4>Hasil Defuzzifikasi</h4>
    <table class="table" width="70%">
            <tr>
                <td width="20%"></td>
                <td width="40%">Karies Superfisialis</td>
                <td width="40%"><?=$superfisialis;?>%</td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td width="40%">Karies Sekunder</td>
                <td width="40%"><?=$sekunder;?>%</td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td width="40%">Karies Media</td>
                <td width="40%"><?=$media;?>%</td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td width="40%">Karies Profunda</td>
                <td width="40%"><?=$profunda;?>%</td>
                <td width="20%"></td>
            </tr>
        </table>
    </center>

<?php
    include("footer.php");
?>