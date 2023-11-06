<?php
$say = "Hallo " . $_GET['name'];
// http: //localhost:8080/get.php?name=Farabie (untuk mengakses getnya di localhost) cukup tambahkan ?namaparameternya
?>


<html>

<body>
    <h1>
        <?= $say; ?>
    </h1>
</body>

</html>