
    <form action="" method="post">

    <table class="table table-bordered" id="usertbl" >
        <thead>
        <tr>
            <td> </td>
            <td>ID</td>
            <td>Тема</td>
            <td>Автор</td>
            <td>Заголовок</td>
            <td>Краткое описание</td>
            <td>Дата</td>

        </tr>
        </thead>
        <tbody>
        <?php if(News::selectall()){
            $rows = News::selectall();
            $i = 0 ;
            foreach($rows as $row):

                ?>
                <tr>
                    <?php echo "<td><input name=\"id[]\" type='checkbox' value='" . $row['id'] . "'/></td>"?>
                    <td><?php echo ++$i ?></a></td>
                    <td><?php echo htmlspecialchars( News::selectTopic($row['id_title']));?></td>
                    <td><?php $user = News::selectUser($row['id_user']);
                                            echo htmlspecialchars($user['name']).' '.htmlspecialchars($user['s_name']);?></td>
                    <td><?php echo htmlspecialchars($row['title']) ?></a></td>

                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo htmlspecialchars($row['date']) ?></td>

                </tr>
            <?php endforeach;
        }else{
            echo 'Error';
        }?>
        <tfoot>
        <td colspan="3" align="right">
            <button type="submit"  class="btn btn-default" name="deleten" value="delete">Удалить</button>
            <td><a href="index.php?module=admin&page=news&action=create">создать </a></td>
        </td>
        </tfoot>
        </tbody>

    </table>
    </form>
