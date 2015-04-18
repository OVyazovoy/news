<?php

if(isset($_SESSION['user']) && $_SESSION['user']['admin_status'] == true ){
    header("Location: /news/index.php?module=admin&page=users");
}else {
    header("Location: /news/index.php?module=site&page=content");
}