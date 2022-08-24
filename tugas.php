<?php
//pembuatan fungsi
$panjang=18;
$lebar=10;
$tinggi=12;
function VolumeBalok ($panjang, $lebar, $tinggi) {
    return($panjang*$lebar*$tinggi);
}
    //menampilkan fungsi
echo "Volume balok tersebut adalah :" .VolumeBalok($panjang,$lebar,$tinggi). "cm";
?>