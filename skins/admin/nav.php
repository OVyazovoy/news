
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/my_css_site.css">

    <title></title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="/news/index.php?module=site&page=main"><h1>Главная</h1></a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="/news/index.php?module=site&page=logout">Выйти(<?php echo $_SESSION['user']['name'];?>)</a></li>
                <li><a href="/news/index.php?module=admin&page=users">Пользователи</a></li>
                <li><a href="/news/index.php?module=admin&page=topics">Темы</a></li>
                <li><a href="/news/index.php?module=admin&page=news">Статьи</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <?php
                $result  = mysqli_query($link, "
                  SELECT *
                  FROM `title`
                  ORDER BY `id`
                  ");
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <li><a href=""><?php echo htmlspecialchars($row['title'])?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>