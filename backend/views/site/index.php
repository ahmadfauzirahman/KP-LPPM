<?php

/* @var $this yii\web\View */

$this->title = 'Home - Ummi';
?>
<div class="site-index">
    <div class="row ">
        <a href="?r=kategori-barang">
            <div class="col-lg-4">
                <div class="card-box text-center ">
                    <img src="<?= Yii::$app->request->baseUrl ?>/ummi/kategori-barang.png" alt="" height="250px">
                    <div class="card-title">
                        <h2><strong>Kategori Barang</strong></h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="?r=barang">
            <div class="col-lg-4">
                <div class="card-box text-center ">
                    <img src="<?= Yii::$app->request->baseUrl ?>/ummi/barang.png" alt="" height="250px">
                    <div class="card-title">
                        <h2><strong>Barang</strong></h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="?r=transaksi">
            <div class="col-lg-4">
                <div class="card-box text-center ">
                    <img src="<?= Yii::$app->request->baseUrl ?>/ummi/transaksi-barang.png" alt="" height="250px">
                    <div class="card-title">
                        <h2><strong>Transaksi Barang</strong></h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="?r=invoice">
            <div class="col-lg-4">
                <div class="card-box text-center ">
                    <img src="<?= Yii::$app->request->baseUrl ?>/ummi/transksi-detail.png" alt="" height="250px">
                    <div class="card-title">
                        <h2><strong>Invoice Laporan</strong></h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-lg-4">
                <div class="card-box text-center ">
                    <img src="<?= Yii::$app->request->baseUrl ?>/ummi/rekap-laporan.png" alt="" height="250px">
                    <div class="card-title">
                        <h2><strong>Grafik Laporan</strong></h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-lg-4">
                <div class="card-box text-center ">
                    <img src="<?= Yii::$app->request->baseUrl ?>/ummi/exit.png" alt="" height="250px">
                    <div class="card-title">
                        <h2><strong>Keluar</strong></h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
