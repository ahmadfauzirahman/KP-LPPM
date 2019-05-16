<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Barang */
?>
<div class="barang-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'barang_id',
            'kode_barang',
            [
                'attribute' => "kategori_id",
                "value" => function ($model) {
                    return \common\models\KategoriBarang::findOne($model->kategori_id)['nama_kategori'];
                }
            ],
            'nama_barang',
            'harga',
            [
                'label' => 'Foto Kategori',
                'format' => 'raw',
                'value' => '<img src="' . Yii::$app->request->baseUrl . '/barang/' . $model->foto . '" width="100%"/>',
            ],
            'qty',
        ],
    ]) ?>

</div>
