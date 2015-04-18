<div class="col-xs-12 col-sm-9 ">
    <form class="form-inline " id="usertbl" action="" method="post">
        <div class="form-group">
            <?php echo "<input class='form-control' name=\"topics\" type='text' value='' placeholder='Тема' required autofocus>"?>


        </div>
        <?php  if(isset($_GET['id'])) {?>
            <button type="submit"  class="btn btn-default" name="updatet" value="create">Изменить</button>

        <?php }else {?>
            <button type="submit"  class="btn btn-default" name="createt" value="create">Создать тему</button>
        <?php }?>
    </form>


        <form action="" method="post">
            <table class="table table-bordered" id="usertbl" >
                <thead>
                <tr>
                    <td> </td>
                    <td>ID</td>
                    <td>Title</td>
                </tr>
                </thead>
                <tbody>
                <?php if(Topics::selectall()){
                    $rows = Topics::selectall();
                    $i = 0 ;
                    foreach($rows as $row):

                        ?>
                        <tr>
                            <?php echo "<td><input name=\"id[]\" type='checkbox' value='" . $row['id'] . "'/></td>"?>
                            <td><a href="#"><?php echo ++$i;?></a></td>
                            <?php echo " <td><a href='index.php?module=admin&page=topics&id=".$row['id']."'>" .htmlspecialchars($row['title']) ."</a></td>"?>

                        </tr>
                    <?php endforeach;
                }else{
                    echo 'Error';
                }?>
            <tfoot>
                    <td colspan="3" align="right">
                        <button type="submit"  class="btn btn-default" name="deletet" value="delete">Удалить</button>
                    </td>
                </tfoot>

            </tbody>
        </table>
        </form>



</div><!--/.col-xs-12.col-sm-9-->