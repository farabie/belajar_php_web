<?php
$say = "Hallo " . $_GET['first_name'] . " " .  $_GET['last_name'];
// http://localhost:8080/get-multi.php?first_name=Muhammad&last_name=Farabie untuk multi cukup tambahkan &
?>


<html>

<body>
    <h1>
        <?= $say; ?>
    </h1>
</body>

</html>