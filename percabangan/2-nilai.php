<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai 2</title>
</head>
<body>
    <?php
    $nilai = 96;
    if ($nilai >=80) {
        echo "Nilai Anda $nilai,Anda lulus";
    } elseif ($nilai >=60) {
        echo "Nilai Anda $nilai,Nilai Remedial";
    } else {
        echo "Nilai anda $nilai,Anda Tidak Lulus";
    }
    ?>
    
</body>
</html>