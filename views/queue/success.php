<?php
use yii\helpers\Html;

$this->title = 'Nomor Antrian Anda';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="queue-success">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2 class="text-center"><?= Html::encode($this->title) ?></h2>

            <div class="alert alert-success text-center" style="width:30rem">
                <h1 class="display-1"><?= Html::encode($queue->queue_number) ?></h1>
                <p>Status: <span class="badge badge-warning"> Menunggu </span></p>
            </div>

            <div class="queue-details">
                <h5 class="text-center mb-4">Terima kasih telah mendaftar.</h5>
                <p class="text-center">Layanan: <strong><?= Html::encode($service->name) ?></strong></p>
                <p class="text-center">Merchant: <strong><?= Html::encode($service->merchant->name) ?></strong></p>
            </div>

            <p class="text-center">Anda dapat memantau status antrian di halaman <strong>Riwayat Antrian</strong>.</p>

            <div class="form-group text-center">
                <?= Html::a('Kembali ke Beranda', ['site/index'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    <div>
</div>
