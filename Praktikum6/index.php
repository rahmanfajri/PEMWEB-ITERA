<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Konversi Romawi - Rahman Pajri</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<form action="#" method="POST" align="center">
		<h3>Angka :</h3>
        <input type="number" name="angka" placeholder="Masukkan Angka"><br><br>
		<button type="submit">Konversi</button>
		<h2>Romawi : <?php error_reporting(0); echo angkaRomawi($_POST["angka"]); ?><br></h2>
		</form>
	</body>
</html>


<?php
function angkaRomawi($angka)
{
    $angka = intval($angka);
    $hasil = '';
	
	$array = array(
    'M' => 1000,
	'CM' => 900,
	'D' => 500,
	'CD' => 400,
	'C' => 100,
	'XC' => 90,
	'L' => 50,
	'XL' => 40,
	'X' => 10,
	'IX' => 9,
	'V' => 5,
	'IV' => 4,
	'I' => 1);
	
	foreach($array as $roman => $value){
	    $matches = intval($angka/$value);
	    $hasil .= str_repeat($roman,$matches);
	    $angka = $angka % $value;
	}
	
	return $hasil;
}

?>
