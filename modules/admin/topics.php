<?php

if(isset($_SESSION['user']) && $_SESSION['user']['admin_status'] == true ){
    class Topics{
        static function includedb(){
            $mysqli = new mysqli(Core::$db_local,Core::$db_login,Core::$db_pass,Core::$db_name);
            $mysqli->set_charset('utf8');
            /* проверка подключения */
            if ($mysqli->connect_errno) {
                printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
                exit();
            }
            return $mysqli;
        }
        static function selectall(){
            $mysqli = self::includedb();
            $query = "SELECT * FROM `title`";
            $result = $mysqli->query($query);
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $rows[] = $row;
            }
            return $rows;
        }
        static function create ($name){
            $link = mysqli_connect(Core::$db_local,Core::$db_login,Core::$db_pass,Core::$db_name);
            mysqli_query($link, "
             INSERT INTO `title` SET
              `title`     = '" . mysqli_real_escape_string($link, $name) . "'"
            );
           // header("Location: /news/index.php?module=admin&page=topics");
        }
        static function delete($id){
            $id = join(', ', $id);
            $link = mysqli_connect(Core::$db_local,Core::$db_login,Core::$db_pass,Core::$db_name);
            mysqli_query($link, "
            DELETE FROM `news`.`title`
            WHERE `title`.`id` IN ($id);
            ");
        }
        static function update($id,$name){
            $link = mysqli_connect(Core::$db_local,Core::$db_login,Core::$db_pass,Core::$db_name);
            mysqli_query($link, "
            UPDATE `news`.`title` SET `title` ='".$name ."' WHERE `title`.`id` = ".$id.";
            ");
             header("Location: /news/index.php?module=admin&page=topics");
        }

    }

    if (isset($_POST['createt'])){
        if(empty($_POST['topics'])){
            $error = 'Пустое поле ввода';
        }else
        {
        Topics::create($_POST['topics']);}

    }
    if (isset($_POST['deletet'])){
        if(!empty($_POST['id'])) {
            Topics::delete($_POST['id']);
        }
    }
    if (isset($_POST['updatet'])){
        Topics::update($_GET['id'],$_POST['topics']);
    }

}else {
    header("Location: /news/index.php?module=site&page=content");
}