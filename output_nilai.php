<?php
if(isset($_POST['proses']))
{
$N1=$_POST['N1'];
$N2=$_POST['N2'];
$N3=$_POST['N3'];
$N4=$_POST['N4'];

$hasil = $N1*0.1+$N2*0.2+$N3*0.3+$N4*0.4;

echo "Nilai Akhir Anda Adalah $hasil<br>";
}
?>