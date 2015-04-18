<!DOCTYPE html>
<html>

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


<div class="container" id="page">
   <?php include 'nav.php'; ?>
   <?php include '/'.$_GET['page'].".php"  ?>


</div><!-- page -->
</body>
</html>
