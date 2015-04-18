<?php
if(isset($_SESSION['user'])){
    header("Location: /news/index.php?module=site&page=content");

}else {
    if (isset($_POST['lemail'], $_POST['lpass'])) {
        $result = mysqli_query($link,"
           SELECT *
           FROM `user`
           WHERE `password` = '".$_POST['lpass']."'
           AND   `email`    = '".$_POST['lemail']."'
           ");
        if(mysqli_num_rows($result)){
            $_SESSION['user'] = mysqli_fetch_assoc($result);
            header("Location: /news/index.php?module=site&page=login");
            exit();
        }else{
            $errors['error'] = 'Пользователь с таким Email или паролем отсутсвует';
        }

    }

}