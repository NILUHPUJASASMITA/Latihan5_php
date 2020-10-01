

<b><h3>Menghitung Hasil dari Deret Bilangan Fibonacci</b><h3>

<form action="" method="get">
Inputkan angka<Input Nilai Ke-n <input type="number" name="n" placeholder="Max 100" required>

<input type="submit" value="generate">
</form>


<p>
<hr>
<h4>Hasil Perhitungan Dari Deret Bilangan Fibonacci</h4>

<?php

$deret[1] = 4;
$deret[2] = 7;

$n = isset($_GET['n'])?$_GET['n']:'1';

if ($n >= 2 and $n <= 100)
{
 $hasil = "$deret[1], $deret[2]";
 for($i=3;$i<=$n;$i++)
 {
  $x=$i-1;
  $y=$i-2;

  $deret[$i] = $deret[$x] + $deret[$y];
  $hasil .= ", $deret[$i]";

 }
 echo "<b>Deret Bilangan Fibonacci 1 - $n</b>";
 echo "<div style='color:blue'>Output: $hasil</div>";
} else {
 echo "<b style='color:red'>Maaf nilai n harus diantara 2 s/d 100<b>";
}
?>
