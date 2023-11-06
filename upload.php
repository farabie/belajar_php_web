<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];

    move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
}
?>

<html>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
        <table>
            <tr>
                <td>File name</td>
                <td><?= $file_name; ?></td>
            </tr>
            <tr>
                <td>Type name</td>
                <td><?= $file_type; ?></td>
            </tr>
            <tr>
                <td>Size name</td>
                <td><?= $file_size ?></td>
            </tr>
            <tr>
                <td>Tmp Name</td>
                <td><?= $file_tmp_name; ?></td>
            </tr>
            <tr>
                <td>Error name</td>
                <td><?= $file_error ?></td>
            </tr>
        </table>
    <?php } ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label> File:
            <input type="file" name="upload_file">
        </label>
        <input type="submit" value="Upload">
    </form>
</body>

</html>