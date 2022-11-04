<?php 

$nama="Della";
/*
echo $nama;
echo "<br>";
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>";
*/

/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n. " ".$nama."<br>"; 
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/
/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

//PERCABANGAN
/*
if ($nama == "Lilis") {
    echo $nama." adalah orang Sunda";
} else if($nama == "Luna") {
    echo $nama." bukan orang Sunda";
}else {
    echo $nama." darimana dia?";
}
*/
/*
switch($nama) {
    case "Lilis";
        $pesan = $nama." adalah orang Sunda";
    break;
    case "Luna";
        $pesan = $nama." bukan orang Sunda";
    break;
    default:
        $pesan = $nama." darimana dia?";
}
echo $pesan;
*/
  ?>

  <!DOCTYPE html>
	<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	</head>
	<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
  	</from>
  	<?php
  	if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "Lilis";
                $pesan = $_POST['nama']." adalah orang Sunda";
            break;
            case "Luna";
                $pesan = $_POST['nama']." bukan orang Sunda";
            break;
            default:
                $pesan = $_POST['nama']." darimana dia?";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }
  	} 

  	?>
  </body>
  </html>