<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Aplikasi Antrian';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Selamat Datang di Aplikasi Antrian Merchant!</h1>
        <p class="lead">Daftar antrian untuk merchant favoritmu dengan mudah dan cepat.</p>
        <?= Yii::$app->user->isGuest
            ? Html::a('Mulai Sekarang', ['user/login'], ['class' => 'btn btn-lg btn-primary'])
            : Html::a('Lihat Merchant', ['merchant/index'], ['class' => 'btn btn-lg btn-primary']) 
        ?>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Cepat & Mudah</h3>
                    <p>Daftar layanan dengan cepat tanpa menunggu lama.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Akses Kapan Saja</h3>
                    <p>Mendaftar antrian dari mana saja dengan sistem online.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Merchant Terpercaya</h3>
                    <p>Pilih merchant dengan layanan terpercaya.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-store"></i>
                </div>
            </div>
        </div>
    </div>

</div>
