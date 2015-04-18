<html>

<head>
    <meta charset="UTF-8">
    <script src="js/jquery.js"></script>
    <script src="js/my_js_admin.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>

    <script src="js/my_js_admin.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/my_css_site.css">





    <title></title>
</head>

<body id="about">
<div class="container">
    <!--<input type="button" onclick="count_rabbits()" value="Считать кролей!"/>-->


    <div class="head"><?php include 'nav.php'; ?></div>
    <div class="col-xs-12 col-sm-9 ">
    <?php
            if(isset($_GET['action'])) {
                include './skins/' . $_GET['module'] . '/' . $_GET['page'] . '/' . $_GET['action'] . ".php";
            }else{
                include './skins/'.$_GET['module'].'/'.$_GET['page'].'/'.$_GET['page'].".php";
            }
    ?>
    </div>


</div>
</body>
</html>