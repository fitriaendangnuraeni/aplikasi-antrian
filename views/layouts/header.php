<?php use yii\helpers\Html; ?>

<header class="main-header">
<!-- Logo -->
<a href="<?= Yii::$app->homeUrl ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LTE</span>
</a>
<!-- Header Navbar -->
<nav class="navbar navbar-static-top">
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- Logout Button -->
                    <li class="user-footer">
                        <div class="pull-right">
                            <?= Html::a('Sign out', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']) ?>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>