<?php
    $students=[
            ['10011','Abdul','XI RPL','Sulawesi','Laki-Laki','5.jpg'],
            ['10022','Tatang','XI RPL','Ciheuleut','Laki-Laki','4.jpg'],
            ['10033','Alex','XI RPL','Karawang','Laki-Laki','2.jpg'],
            ['10044','Bedul','XI RPL','Arab','Laki-Laki','3.jpg'],
            ['10055','uwa','XI RPL','Papua','Laki-Laki','1.jpg'],
            ];
    // cara menampilkan array multidimensi
    // var_dump($siswa1[3][1]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
</head>
<body>
   <?php foreach ($students as $students ):?>
            <ul>
                <li><img src="foto/<?php echo $students['5'] ?>"></li>
                <li><?php echo $students['0']?></li>
                <li><?php echo $students['1']?></li>
                <li><?php echo $students['2']?></li>
                <li><?php echo $students['3']?></li>
                <li><?php echo $students['4']?></li>
            </ul>
   <?php endforeach ?>
</body>
</html>