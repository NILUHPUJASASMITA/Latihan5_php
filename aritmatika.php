

</br><b>MENGHITUNG DERET ARITMATIKA</b>
<p>
<form  method="POST" action="">

Nilai awal  <input type="text" name="na" value="<?=isset($_POST['na']) ? $_POST['na'] : ''?>"><br><br>
Nilai beda  <input type="text" name="nb" value="<?=isset($_POST['nb']) ? $_POST['nb'] : ''?>"><br><br>
Suku yang di cari  <input type="text" name="nc" value="<?=isset($_POST['nc']) ? $_POST['nc'] : ''?>"><br><br>

<input type="submit" name="submit" value="hasil">

</form>

<hr>

<h3>Hasil aritmatika</h3>

<?php
if (isset($_POST['submit'])){
$na = $_POST['na'];
$nb = $_POST['nb'];
$nc = $_POST['nc'];
echo "Nilai Awal = ". $na;
echo "<br> Nilai Beda = ". $nb;
echo "<br> Nilai dari aritmatika setelah diinput : " ;
for ($i=1 ; $i<=$nc; $i++){
    $hasil = $na + ($nb*($i-1));
    echo "<br>".$hasil;
}
$hasilsuku = $na + ($nc-1) * $nb;
echo "<br> <br> Nilai suku ke- ". $nc;
echo "<br>".$hasilsuku;
}
?>