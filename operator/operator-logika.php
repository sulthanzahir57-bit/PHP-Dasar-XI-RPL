<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>
<body>
    <?php
    $n = true;
    $i = false;

    echo "OPERATOR LOGIKA AND";
    echo "<br>";
    echo ("A && B : ");var_dump($n && $i);
    echo "<br>";
    echo ("B && B : ");var_dump($i && $i);
    echo "<br>";
    echo ("A && A : ") ;var_dump($n && $n);
    echo "<br>";
    echo ("B && A : ") ;var_dump($i && $n);
    echo "<br>";

    echo"<br>";
    echo"<br>";
    echo "OPERATOR LOGIKA OR ";
    echo "<br>";
    echo ("A || B : ") ;var_dump($n || $i);
    echo "<br>";
     echo ("B || B : ") ;var_dump($i || $i);
    echo "<br>";
    echo ("A || A : ");var_dump($n || $n);
    echo "<br>";
    echo ("B || A : ") ;var_dump($i || $n);
    echo "<br>";

    echo"<br>";
    echo"<br>";
    echo "OPERATOR LOGIKA NEGASI";
    echo"<br>";
    echo ("Negasi A : ");var_dump(!$n);
    echo"<br>";
    echo ("Negasi B : ") ;var_dump(!$i);

    ?>
    
</body>
</html>