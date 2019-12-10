<?php
session_start();

$mod = 'main';

if(array_key_exists('mod',$_GET)){
    $mod = $_GET['mod'];
}

if(($_GET['opt'])=='logout' || $_POST['opt'] == 'login'){
    $opt = (isset($_GET['opt'])) ? $_GET['opt'] : $_POST['opt'];
    switch ($opt){
        case 'login' :
            if(preg_match('/^[A-Za-z][A-Za-z0-9]{4,31}$/',$_POST['user'])){
                echo 'Valid data';
                $_SESSION['user'] = $_POST['user'];
                $mod=$_POST['mod'];
            }
            else{
                echo 'Invalid data';
                $mod = 'auth';
            }
            break;
        case 'logout':
            unset($_SESSION['user']);
            $mod = 'main';
            break;
    }
}

include 'modules/' . $mod . '/index.php';

?>