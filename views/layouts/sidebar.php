<?php use yii\helpers\Html; ?>

<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><?= Html::a('<i class="fa fa-home"></i> <span>Dashboard</span>', ['/site/index']) ?></li>
            <li><?= Html::a('<i class="fa fa-user"></i> <span>Profile</span>', ['/user/profile']) ?></li>
            <li><?= Html::a('<i class="fa fa-users"></i> <span>Merchants</span>', ['/merchant/index']) ?></li>
        </ul>
    </section>
</aside>
