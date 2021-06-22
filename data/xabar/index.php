<?php
session_start();
require 'config.php';

if(isset($_REQUEST['request'])){
include 'php/'.$_REQUEST['request'].".php";
}elseif(isset($_REQUEST['ajax'])){
    include $_REQUEST['ajax'].".php";
}else{
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    include './generate/head.php';
    echo "<body>";
     echo "<div class='body'>";
    if(isset($_SESSION['user'])){
        switch($_SESSION['user']['user_type']){
            case 1: include './users/admin.php'; break;
            case 2: include './users/user.php'; break;
            default : include './users/user.php';
        }
        
    }else{
    include './login_form.php'; 
    }
    echo "</div>";
    
    include './generate/footer.php';
   
    echo "</body>";
    echo "</html>";
}