<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Riwayat Antrian';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="merchant-index">
    <h1 class="mb-4"><?= Html::encode($this->title) ?></h1>
    <h4>Halo, <?= Yii::$app->user->identity->username?></h4>
    <p>Berikut adalah daftar riwayat antrian anda:</p>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Merchant</th>
                <th>Layanan</th>
                <th>Nomor Antrian</th>
                <th>Status Antrian</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($queues as $index => $queue): ?>
                <tr>
                    <td><?= Html::encode($index +1) ?></td>
                    <td><?= Html::encode($queue->merchant->name) ?></td>
                    <td><?= Html::encode($queue->service->name) ?></td>
                    <td><?= Html::encode($queue->queue_number) ?></td>
                    <td>
                        <?php if ($queue->queue_status == 'waiting'): ?>
                            <p><span class="badge badge-warning">Menunggu</span></p>
                        <?php elseif ($queue->queue_status == 'processing'): ?>
                            <p><span class="badge badge-info">Diproses</span></p>
                        <?php elseif ($queue->queue_status == 'completed'): ?>
                            <p><span class="badge badge-success">Selesai</span></p>
                        <?php else: ?>
                            <p><span class="badge badge-secondary">Tidak Diketahui</span></p>
                        <?php endif; ?>
                     </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

    <!-- <div class="container">
    <h2>Nomor Antrian Anda</h2>

    <div class="row">
        <div class="col-lg-4">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fas fa-ticket-alt"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Nomor Antrian</span>
                    <span class="info-box-number">2</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fas fa-clock"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Status</span>
                    <span class="info-box-number">Menunggu</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-cogs"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Layanan</span>
                    <span class="info-box-number">Service</span>
                </div>
            </div>
        </div>
    </div>
</div> -->

