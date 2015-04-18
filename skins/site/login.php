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

<body >
<?php include 'nav.php'; ?>
<div  class="container">
    <form class="col-xs-4 login" action="" method="post" >


        <label for="inputEmail">Почтовый адрес</label>
        <input type="email" id="inputEmail" class="form-control" name="lemail" value="<?php echo @htmlspecialchars($_POST['email']);?>" placeholder="Email" required autofocus>

        <label for="inputPassword">Пароль</label>
        <input type="password" id="inputPassword" class="form-control" name="lpass" value="<?php echo @htmlspecialchars($_POST['pass']);?>" placeholder="Пароль" required>
        <h6 id="error"> <p class="bg-danger"> <?php  echo @$errors['error']; ?></p></h6>
        <button class="btn btn-default" type="submit">Войти</button>

    </form>
</div>

</body>
</html>
