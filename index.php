<?php
//55
session_start();
require 'config.php';
if($_REQUEST['request']){
require 'php/'.$_REQUEST['request'].".php";
}elseif($_REQUEST['ajax']){
    require $_REQUEST['ajax'].".php";
}else{
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    require 'generate/head.php';
    echo "<body>";
    if($_SESSION['user']){
        switch($_SESSION['user']['user_type']){
            case 1: require 'users/admin.php'; break;
            case 2: require 'users/user.php'; break;
            default : require 'users/user.php';
        }
        
    }else{
    require 'login_form.php'; 
    }
    require 'generate/footer.php';
    echo "<body>";
    echo "</html>";
}
