<?php
if(isset($_POST['proses']))
{
$nb=$_POST['nb'];
$hb=$_POST['hb'];
$jb=$_POST['jb'];

$total = $hb*$jb;

echo "Nama Barang : $nb<br>";
echo "Harga Barang : $hb<br>";
echo "Jumlah Barang : $jb<br>";
echo "_________________________<br>";
echo "Total : $total<br>";
}
?>