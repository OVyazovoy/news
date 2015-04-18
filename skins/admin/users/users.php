
<div class="col-xs-12 col-sm-9 ">
    <table class="table table-bordered" id="usertbl" >
        <thead>
            <tr>
                <td> </td>
                <td>ID</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Email</td>
                <td>Статус подверждения</td>
                <td>Бан</td>
                <td>Админ</td>
                <td>Пароль</td>
            </tr>
        </thead>
        <tbody>
       <?php
       $result  = mysqli_query($link, "
                  SELECT *
                  FROM `user`
                  ORDER BY `id`
                  ");
       if(mysqli_num_rows($result)){
           $count = mysqli_num_rows($result);
           while($row = mysqli_fetch_assoc($result)){
               ?>
               <tr>
                   <td><input type="checkbox"></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['id']) ?></a></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['name']) ?></a></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['s_name']) ?></a></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['email']) ?></a></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['confirm_status']) ?></a></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['ban_status']) ?></a></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['admin_status']) ?></a></td>
                   <td><a href="#"><?php echo htmlspecialchars($row['password']) ?></a></td>
               </tr>
          <?php }
       }else{
          echo 'Error';
       }

       ?>

        </tbody>

    </table>
</div><!--/.col-xs-12.col-sm-9-->