<?php
if(isset($_SESSION['user'])){
    header("Location: /news/index.php?module=site&page=main");

}else {
    $errors = array();

    if (isset($_POST['name'], $_POST['sname'], $_POST['email'], $_POST['pass'], $_POST['pass2'])) {
        if (empty($_POST['name'])) {
            $errors['name'] = 'Введите имя';
        }
        if (empty($_POST['sname'])) {
            $errors['name'] = 'Введите фамилию';
        }
        if (empty($_POST['pass'])) {
            $errors['pass'] = 'Введите пароль';
        }
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Введите Email';
        }
        if ($_POST['pass'] <> $_POST['pass2']) {
            $errors['pass2'] = 'Не верное подтверждение пароля';
        }
        if (!count($errors)) {

            //random string func
            function generatePassword($length = 20)
            {
                $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
                $numChars = strlen($chars);
                $string = '';
                for ($i = 0; $i < $length; $i++) {
                    $string .= substr($chars, rand(1, $numChars) - 1, 1);
                }
                return $string;
            }

            //mail send
            function sendMail($confirm_link)
            {
                $to = $_POST['email'];
                $subject = 'confirm link';
                $message = 'for end registration click on link: ' . $confirm_link;
                $headers = 'From: webmaster@hello.ru' . "\r\n";

                mail($to, $subject, $message, $headers);
            }

            // confirm registration function


            $r_code = generatePassword();
            $confirm_link = "http://news/index.php?module=site&confreg=" . $r_code;
            sendMail($confirm_link);
            //confreg($_GET['confreg']);


            mysqli_query($link, "
           INSERT INTO `user` SET
           `name`     = '" . mysqli_real_escape_string($link, $_POST['name']) . "',
           `s_name`   = '" . mysqli_real_escape_string($link, $_POST['sname']) . "',
           `password` = '" . mysqli_real_escape_string($link, md5($_POST['pass'])) . "',
           `email`    = '" . mysqli_real_escape_string($link, $_POST['email']) . "',
           `code` = '" . $r_code . "';
        ");

            $_SESSION['regok'] = 'ok';
            // echo 'check your email';
            // header("Location: /index.php?module=site&page=reg");
            exit();
            //next
        }


    }
}
