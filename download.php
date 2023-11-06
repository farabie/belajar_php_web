<?php 
if(isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="Kontrakan.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/file/Kontrakan.png');
    exit();
}else {
    echo "Invalid Link";
    exit();
}

?>