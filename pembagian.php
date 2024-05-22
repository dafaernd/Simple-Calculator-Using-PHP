<?php
if (isset($_POST["submit"])) {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];

    $hasil = $angka1 / $angka2;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style-2.css">
</head>
<body>
    <!-- JUDUL -->
    <div class="container-1">
        <div class="items-1">
            <h1>Pembagian</h1>
        </div>
    </div>
    <!-- JUDUL END -->

    <!-- ISI -->
    <div class="container-2">
        <!-- FORM -->
        <div class="items-1">
            <form action="" method="POST">
                <div>
                    <label for="angka1">Masukkan angka-1 :</label>
                    <input type="number" name="angka1" id="angka1" autofocus required>
                </div>
                <br>
                <div>
                    <label for="angka2">Masukkan angka-2 :</label>
                    <input type="number" name="angka2" id="angka2" required>
                </div>
                <br>
                <button type="submit" name="submit">submit</button>
                <button type="button"><a href="index.php">back</a></button>
            </form>
        </div>
        <!-- FORM END -->
        <div class="items-2">
            <h1>
                Hasil : <?php if (isset($hasil)) { ?>
                    <?php echo $hasil ?>
                <?php } ?>
            </h1>
        </div>
    </div>
    <!-- ISI END -->
</body>
</html>