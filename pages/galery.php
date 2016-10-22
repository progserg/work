<?php
if (!empty($_GET['img'])) {
    include(__DIR__ . '/../resource.php');
    $img = $image[$_GET['img']][0];
    $txt = $image[$_GET['img']][1];
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>tander</title>
</head>
<body>
<div id="wrapper">
    <marquee behavior="alternate"><h1>--ТАНДЕР ШОУ--</h1></marquee>
    <br>
    <table>
        <thead>
        <th colspan="1">Галерея</th>
        </thead>
        <tbody>
        <tr>
            <?php
                include (__DIR__ . '/templates/bigTd.php');
            ?>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html>