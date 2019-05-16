<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang */
?>
<div class="kategori-barang-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kategori_id',
            'nama_kategori',
            [
                'label' => 'Foto Kategori',
                'format' => 'raw',
                'value' => '<img src="' . Yii::$app->request->baseUrl . '/foto-barang/' . $model->foto . '" width="100%"/>',
            ],
            'updated_at:date',
            'created_at:date',
        ],
    ]) ?>

</div>

