<?php
error_reporting(-1);
session_start();


include_once'./config/main.php';
include_once'./config/variables.php';

$link = mysqli_connect(Core::$db_local,Core::$db_login,Core::$db_pass,Core::$db_name);
mysqli_set_charset($link,'utf8');

include "./modules/".$_GET['module'].'/'.$_GET['page'].".php";


include './skins/'.$_GET['module'].'/main.php';