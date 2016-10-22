<?php
if(empty($_GET['path'])) {
    include(__DIR__ . '/pages/templates/main.php');
}else{
    $path = $_GET['path'];
    switch ($path){
        case 1:
            $_GET['img'] = $path;
            include( __DIR__ . '/pages/galery.php');
            break;
        case 2:
            $_GET['img'] = $path;
            include(__DIR__ . '/pages/galery.php');
            break;
        case 3:
            $_GET['img'] = $path;
            include(__DIR__ . '/pages/galery.php');
            break;
        case 4:
            $_GET['img'] = $path;
            include(__DIR__ . '/pages/galery.php');
            break;
        default:
            $_GET['path']=null;
            include(__DIR__ . '/index.php');
    }

}