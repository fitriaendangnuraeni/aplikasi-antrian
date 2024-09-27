<?php
use dmstr\adminlte\web\AdminLteAsset;
use yii\helpers\Html;
use app\assets\AppAsset;

dmstr\adminlte\web\AdminLteAsset::register($this);
dmstr\adminlte\web\FontAwesomeAsset::register($this);
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <!-- Header -->
    <?= $this->render('header.php') ?>
    
    <!-- Sidebar -->
    <?= $this->render('sidebar.php') ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <section class="content">
            <?= $content ?>
        </section>
    </div>

    <!-- Footer -->
    <?= $this->render('footer.php') ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
