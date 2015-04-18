<?php
if(isset($_SESSION['user']) && $_SESSION['user']['admin_status'] == true ){
    include "topics.php";
    class News{

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
            $query = "SELECT * FROM `news`";
            $result = $mysqli->query($query);
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $rows[] = $row;
            }
            return $rows;
        }
        static function selectTopic($id){
            $mysqli =  self::includedb();
            $query = "SELECT `title` FROM `title` WHERE `id` = ".$id."";
            $result = $mysqli->query($query);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            echo $row['title'];
            //return  $row['title'];
        }
        static function selectUser($id){
            $mysqli = self::includedb();
            $query = "SELECT `name`,`s_name` FROM `user` WHERE `id` = ".$id."";
            $result = $mysqli->query($query);
            $row = $result->fetch_array(MYSQLI_ASSOC);

            return $row;
        }
        static function delete($id){
            $id = join(', ', $id);
            $mysqli = self::includedb();
            $query = "DELETE FROM `news`.`news` WHERE `news`.`id` IN ($id);
            ";
            $mysqli->query($query);
        }
        static function create($topic,$title,$description,$text){
            echo $description;
            $mysqli = self::includedb();
           /*$query = "
            INSERT INTO `news`.`news`
            SET
            `id_title`   = ".$topic.";
            `id_user`    =".$_SESSION['user']['id'].";
            `title`      ='".$title."';
            `description`='".$description."';
            `text`       ='".$text."';
            `date`       =NOW();";*/
            $query ="INSERT INTO `news`.`news`
                            (`id`, `id_title`,  `id_user`,                          `title`,        `description`,       `text`,       `date`)
                     VALUES (NULL, ".$topic.",  ".$_SESSION['user']['id'].",        '".$title."',   '".$description."',  '".$text."',   NOW())";
            $mysqli->query($query);
            header("Location: /news/index.php?module=admin&page=news");

        }
    }
    if (isset($_POST['deleten'])){
        if(!empty($_POST['id'])) {
            News::delete($_POST['id']);
        }
    }
    if (isset($_POST['create'])){
        if( !empty($_POST['topic'])&& !empty($_POST['title'])&& !empty($_POST['description'])&& !empty($_POST['text'])) {
            News::create($_POST['topic'],$_POST['title'],$_POST['description'],$_POST['text']);
        }else{
            $error['news']=1;
        }

    }


}else {
    header("Location: /news/index.php?module=site&page=content");
}