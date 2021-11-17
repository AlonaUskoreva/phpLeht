<p>
    Ülesanne 14. Töö pildifailega
    <br>
    https://www.metshein.com/unit/php-pildifailidega-ulesanne-14/
</p>

<form method="post" action="">
    <select name="pildid">
        <option value="">Vali pilt</option>
        <?php
        $kataloog = 'pildid';
        $asukoht=opendir($kataloog);
        while($rida = readdir($asukoht)){
            if($rida!='.' && $rida!='..'){
                echo "<option value='$rida'>$rida</option>\n";
            }
        }
        ?>
    </select>
    <input type="submit" value="Vaata">
</form>
<?php
if(!empty($_POST['pildid'])){
$pilt = $_POST['pildid'];
$pildi_aadress = 'pildid/'.$pilt;
$pildi_andmed = getimagesize($pildi_aadress);

$laius = $pildi_andmed[0];
$korgus = $pildi_andmed[1];
$formaat = $pildi_andmed[2];

echo '<h3>Originaal pildi andmed</h3>';
echo "Laius: $laius<br>";
echo "Kõrgus: $korgus<br>";
echo "Formaat: $formaat<br>";
}
$max_laius = 120;
$max_korgus = 90;

//suhtearvu leidmine
if($laius <= $max_korgus && $korgus<=$max_korgus){
$ratio = 1;
} elseif($laius>$korgus){
$ratio = $max_laius/$laius;
} else {
$ratio = $max_korgus/$korgus;
}if(!empty($_POST['pildid'])){
$pilt = $_POST['pildid'];
$pildi_aadress = 'pildid/'.$pilt;
$pildi_andmed = getimagesize($pildi_aadress);

$laius = $pildi_andmed[0];
$korgus = $pildi_andmed[1];
$formaat = $pildi_andmed[2];
$max_laius = 120;
$max_korgus = 90;

//suhtearvu leidmine
if($laius <= $max_korgus && $korgus<=$max_korgus){
$ratio = 1;
} elseif($laius>$korgus){
$ratio = $max_laius/$laius;
} else {
$ratio = $max_korgus/$korgus;
}

echo '<h3>Uue pildi andmed</h3>';
echo "Arvutamse suhe: $ratio <br>";
}
//uute mõõtmete leidmine
$pisi_laius = round($laius*$ratio);
$pisi_korgus = round($korgus*$ratio);
if(!empty($_POST['pildid'])){
$pilt = $_POST['pildid'];
$pildi_aadress = 'pildid/'.$pilt;
$pildi_andmed = getimagesize($pildi_aadress);

$laius = $pildi_andmed[0];
$korgus = $pildi_andmed[1];
$formaat = $pildi_andmed[2];
$max_laius = 120;
$max_korgus = 90;

//suhtearvu leidmine
if($laius <= $max_korgus && $korgus<=$max_korgus){
$ratio = 1;
} elseif($laius>$korgus){
$ratio = $max_laius/$laius;
} else {
$ratio = $max_korgus/$korgus;
}

//uute mõõtmete leidmine
$pisi_laius = round($laius*$ratio);
$pisi_korgus = round($korgus*$ratio);

echo '<h3>Uue pildi andmed</h3>';
echo "Arvutamse suhe: $ratio <br>";
echo "Laius: $pisi_laius<br>";
echo "Kõrgus: $pisi_korgus<br>";
echo "<img width='$pisi_laius' src='$pildi_aadress'><br>";
}?>
