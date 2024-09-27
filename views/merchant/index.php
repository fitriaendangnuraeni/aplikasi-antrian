<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

$this->title = 'Daftar Merchant';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="merchant-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Berikut adalah daftar merchant yang tersedia:</p>

    <div class="merchant-search">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
            'options' => ['class' => 'form-inline my-4'],
        ]); ?>

        <?= $form->field($searchModel, 'name', ['options' => ['class' => 'form-group m-2']])
            ->textInput(['placeholder' => 'Cari berdasarkan nama', 'class' => 'form-control'])
            ->label(false) ?>

        <?= $form->field($searchModel, 'category', ['options' => ['class' => 'form-group m-2']])
            ->textInput(['placeholder' => 'Cari berdasarkan kategori', 'class' => 'form-control'])
            ->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton('Cari', ['class' => 'btn btn-primary m-2']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            'location',
            'category',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<button type="button" class="btn btn-info btn-sm">Lihat Layanan</button>', $url, [
                            'title' => 'Lihat',
                            'aria-label' => 'Lihat',
                            'data-pjax' => '0',
                        ]);
                    },
                ]

            ],
        ],
    ]); ?>
</div>
