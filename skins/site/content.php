<div class="col-xs-12 col-sm-9 ">
    <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <div class="jumbotron">
        <h1>Main news title</h1>
        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
    </div>

            <?php
                $rows = News::selectall();
                foreach($rows as $row):

                    ?>
                    <div class="row">
                        <div class="col-xs-6 col-lg-4 ">
                        <h2><?php echo htmlspecialchars($row['title']) ?></h2>
                        <p><?php echo $row['description'] ?></p>
                        <p><a class="btn btn-default" href="#" role="button">Открыть&raquo;</a></p>
        </div><!--/.col-xs-6.col-lg-4-->
    </div><!--/row-->
                <?php endforeach; ?>


</div><!--/.col-xs-12.col-sm-9-->