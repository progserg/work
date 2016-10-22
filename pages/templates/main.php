<?php
include(__DIR__ . '/../../resource.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>tander</title>
</head>
<body>
<div id="wrapper">
    <marquee behavior="alternate"><h1>--ТАНДЕР ШОУ--</h1></marquee>
    <br>
    <table>
        <thead>
        <th colspan="2">Галерея</th>
        </thead>
        <tbody>
        <?php $j = 1;
        $c =  count($image);
        while($j <= $c): ?>
            <tr>
                <?php $i = 1;
                while ($i < 3) {
                    $img = $image[$j][0];
                    $txt = $image[$j][1];
                    include(__DIR__ . '/smallTd.php');
                    $i++;
                    $j++;
                }

                ?>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>