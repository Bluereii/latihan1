<form action=""method="post">
Input Nilai :<input type="text" name="nilai"> <br>

<input type="submit" name="proses">
</form>

<?php
if(isset($_POST['proses']))
{
    $n=$_POST['nilai'];
	if ($n>=85)
		{$grade = "A";}
	else if ($n>=75)
		{$grade = "B";}
	else if ($n>=60)
		{$grade = "C";}
	else if ($n>=50)
		{$grade = "D";}
	else if ($n>=0)
		{$grade = "E";}
	else
		{$grade = "Diluar Jangkauan";}
		echo "Nilai Anda $n, dikonversi menjadi $grade";
}
?>