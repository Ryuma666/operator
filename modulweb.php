while <br>
<?php
$awal=1;
while ($awal <= 10) { // true
echo "sekarang no $awal <br>";
$awal++; // $awal = 1 - 1
}
?>
<br>do while <br>
<?php
$no=10;
do {
	echo $no."/";
	$no--;
} while ($no >= 1);
?>
<br>for</br>
<?php
for ($i=0; $i < 5; $i++) {
	echo $i."//";
}
?>
<br><br>
<?php
for($i=1; $i <100; $i++){
	if($i%2==0)echo $i.",";
}
?>
<br>
<br>
tanggal
<select>
	<?php
	for($i=1; $i <=31; $i++) {
		echo "<option>$i</select>";
	}
?>
</select>
<br>
<br>
bulan
<select>
<?php
for($i=1; $i <=12; $i++){
	echo"<option>$i</option>";
}
?>
</select>
