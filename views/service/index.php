<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Daftar Layanan';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="service-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Layanan Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Layanan</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
                <tr>
                    <td><?= Html::encode($service->id) ?></td>
                    <td><?= Html::encode($service->name) ?></td>
                    <td><?= Html::encode($service->description) ?></td>
                    <td><?= Html::encode($service->price) ?></td>
                    <td>
                        <a href="<?= Url::to(['service/view', 'id' => $service->id]) ?>">Lihat</a> |
                        <a href="<?= Url::to(['service/update', 'id' => $service->id]) ?>">Edit</a> |
                        <a href="<?= Url::to(['service/delete', 'id' => $service->id]) ?>" data-method="post" data-confirm="Anda yakin ingin menghapus layanan ini?">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
