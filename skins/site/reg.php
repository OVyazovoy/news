
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

<div class="container">
    <?php include 'nav.php'; ?>
    <form class="registration col-xs-6 " action="" method="post">
        <h2 >Регистрация</h2>

        <label for="inputName">Имя*</label>
        <input type="text" id="inputName" class="form-control" name="name" value="<?php echo @htmlspecialchars($_POST['name']);?>" placeholder="Имя" required autofocus>
        <h6 id="error"> <p class="bg-danger"> <?php  echo @$errors['name']; ?></p></h6>

        <label for="inputSname">Фаилия*</label>
        <input type="text" id="inputSname" class="form-control" name="sname" value="<?php echo @htmlspecialchars($_POST['sname']);?>" placeholder="Фамилия" required autofocus>
        <h6 id="error"> <p class="bg-danger"> <?php  echo @$errors['sname']; ?></p></h6>


        <label for="inputEmail">Почтовый адрес*</label>
        <input type="email" id="inputEmail" class="form-control" name="email" value="<?php echo @htmlspecialchars($_POST['email']);?>" placeholder="Email" required autofocus>
        <h6 id="error">  <p class="bg-danger"> <?php  echo @$errors['email']; ?></p></h6>

        <label for="inputPassword">Пароль*</label>
        <input type="password" id="inputPassword" class="form-control" name="pass" value="<?php echo @htmlspecialchars($_POST['pass']);?>" placeholder="Пароль" required>
        <h6 id="error"> <p class="bg-danger"> <?php  echo @$errors['pass']; ?></p></h6>

        <label for="inputPassword2">Подтвердите пароль*</label>
        <input type="password" id="inputPassword2" class="form-control" name="pass2" value="<?php echo @htmlspecialchars($_POST['pass2']);?>" placeholder="Подтвердите пароль" required>
        <h6 id="error"> <p class="bg-danger"> <?php  echo @$errors['pass2']; ?></p></h6>
        <!--<div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>-->
        <br>
        <p class="bg-info">Поля с * являются обязательными</p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегестрироваться</button>
        <?
        if(isset($_SESSION['regok'])) {
            ?>
            <div class="alert alert-success" role="alert">Регистрация прошла успешно, проверьте вешу почту для подтверждения</div>
        <? } ?>
    </form>
</div> <!-- /container -->
</body>
</html>
