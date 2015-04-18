<?php

if(isset($_SESSION['user']) && $_SESSION['user']['admin_status'] == true ){
  $result  = mysqli_query($link, "
  SELECT *
  FROM `user`
  ORDER BY `id`
  ");
  if(mysqli_num_rows($result)){
    $count = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
    }
  }else{
    $error = $error;
  }
  htmlspecialchars(875);
}else {
  header("Location: /news/index.php?module=site&page=content");
}