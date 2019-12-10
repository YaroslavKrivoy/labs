<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<table id="table">
    <thead>
    <th colspan="4">Таблица умножения</th>
    </thead>
    <tbody>
    <?php
    $start_number = 1;
    $finish_number = 3;
    $count = 0;
    while ($finish_number <= 9){
        for ($i=0;$i<=9;$i++) {
            echo "<tr>";
            echo "<td>".++$count."</td>";
            for ($z=$start_number;$z<=$finish_number;$z++) {
                echo "<td>".$z.'x'.$i.'='.($i*$z)."</td>"; }
            echo "</tr>";
        }
        echo "<tr><td class='void'></td></tr>";
        $start_number = $finish_number + 1;
        $finish_number = $finish_number + 3;
    }

    ?>
    </tbody>
</table>
</body>
</html>