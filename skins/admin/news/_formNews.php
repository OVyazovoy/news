<form method="post">
    <?php
    if (isset($error['news'])){
        echo "<div class='alert alert-danger' role='alert'>Введены не все поля!</div>";
    }
    ?>
        <div class="form-group">
            <label for="id_title">Тема</label>
            <select class="form-control" name="topic">
                <?php if(Topics::selectall()) {
                    $rows = Topics::selectall();
                    foreach ($rows as $row):
                        echo"<option value=".$row['id'].">".$row['title']."</option>";


                    endforeach;
                } else {echo "Error"; }?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" name="title" placeholder="Заголовок">
        </div>
        <div class="form-group">
            <label for="description">Краткое описание</label>
            <textarea rows="2" class="form-control" name="description"  ></textarea>
            <script>
                CKEDITOR.replace( 'description' );
            </script>
        </div>
        <div class="form-group">
            <label for="text">Статья</label>
            <textarea rows="2" class="form-control" name="text"></textarea>
            <script>
                CKEDITOR.replace( 'text' );
            </script>
        </div>

        <?php

        if($_GET['action'] == 'create'):?>
            <button type="submit" class="btn btn-default" name="create">Создать</button>
        <?php else: ?>
            <button type="submit" class="btn btn-default" name="update">Обновить</button>
        <?php endif; ?>
</form>