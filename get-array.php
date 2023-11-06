<?php
$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
//http://localhost:8080/get-array.php?numbers[]=1&numbers[]=5 
//Untuk menambahkan array sebagai querry cukup dengan namaParam[] = value
?>


<html>

<body>
    <h1>
      Total =   <?= $total; ?>
    </h1>
</body>

</html>