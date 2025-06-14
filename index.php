<?php
require "functions/function.php";

if(isset($_POST['btn'])) {
    insert();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="nama">
            <input type="email" name="email">
            <input type="text" name="telepon">
            <select name="divisi" id="">
                <option value="" disabled selected>pilih divisi</option>
                <option value="web">web</option>
                <option value="design">design</option>
            </select>   
            <textarea name="alasan" id=""></textarea>
            <button type="submit" name="btn">Daftar</button>
        </form>
    </div>
</body>
</html>