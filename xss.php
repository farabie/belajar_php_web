<?php 

/* Function htmlspecialchars(value) secara otomatis akan
melakukan encode spesial character di html agar di 
render menjadi text biasa */
$say = "Halo " . htmlspecialchars($_GET['name']);
?>

<html>
    <body>
        <h1><?= $say; ?></h1>
    </body>
</html>






<?php 
//Ini bahaya kalau kita tidak menangani keamanan karena hacker bisa saja
//Mengubah script dengan javascript
//http://localhost:8080/get.php?name=Farabie%3C/h1%3E%3Ch1%3EHalo%20Farabie%20Lagi
//http: //localhost:8080/get.php?name=Farabie%3C/h1%3E%3Ch1%3EHalo%20Farabie%20Lagi%3Cscript%3Ealert(%22Website%20Anda%20diheck%22)%3C/script%3E
?>