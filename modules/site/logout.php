<?php

if(isset($_SESSION['user'])){
    session_destroy();
    header("Location: /news/index.php?module=site&page=content");
}else{
    header("Location: /news/index.php?module=site&page=content");
}
