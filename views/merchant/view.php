<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Daftar Layanan';
$this->params['breadcrumbs'][] = ['label' => 'Merchant', 'url' => ['merchant/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="service-index">
    <h1 class=""><?= Html::encode($this->title) ?></h1>

    <p class="mb-5">
    Berikut adalah daftar layanan yang tersedia di <b><?= Html::encode($merchant->name) ?></b> :
    </p>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($services as $service): ?>
                <div class="col-4">        
                    <div class="card card-outline card-success text-center" style="box-shadow: 10px 11px 12px -6px rgba(162,162,162,0.75);
                        -webkit-box-shadow: 10px 11px 12px -6px rgba(162,162,162,0.75);
                        -moz-box-shadow: 10px 11px 12px -6px rgba(162,162,162,0.75);">
                        <div class="card-body">
                            <h4 class="card-text text-success mb-3 text-center"><?= Html::encode($service->name) ?></h4>
                            <p class="card-text"><?= Html::encode($service->description) ?></p>
                            <p class="card-text"><?= "Rp " . number_format(Html::encode($service->price), 0, ",", ".") ?></p>
                            <?= 
                                Yii::$app->user->isGuest
                                    ? '<a href="'. Url::to(['queue/create', 'service_id' => $service->id, 'merchant_id' => $service->merchant_id]) . '" class="btn btn-success disabled">Ambil Antrian</a>'
                                    : '<a href="'. Url::to(['queue/create', 'service_id' => $service->id, 'merchant_id' => $service->merchant_id]) . '" class="btn btn-success">Ambil Antrian</a>'
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
