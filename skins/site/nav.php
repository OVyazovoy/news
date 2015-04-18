
<div class="container-fluid">
    <div class="row">
        <div class="sidebar mainsidebar" >
            <ul class="nav nav-sidebar">
                <li><a href="/news/index.php?module=site&page=content"><h1>Главная</h1></a></li>
            </ul>
            <?php if (!isset($_SESSION['user'])): ?>
                <ul class="nav nav-sidebar">
                    <li><a href="/news/index.php?module=site&page=reg">Регистрация </a></li>
                    <li><a href="/news/index.php?module=site&page=login">Войти</a></li>
                </ul>
            <?php else: ?>
                <ul class="nav nav-sidebar">

                    <li><a href="/news/index.php?module=site&page=logout">Выйти(<?php echo $_SESSION['user']['name'];?>)</a></li>
                </ul>
            <?php endif; ?>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
        </div>
    </div>
</div>
