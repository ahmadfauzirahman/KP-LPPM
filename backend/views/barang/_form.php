<?php

use common\models\KategoriBarang;
use kartik\select2\Select2;

\backend\assets\AppAsset::register($this);
\kartik\select2\Select2Asset::register($this);

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Barang */
/* @var $form yii\widgets\ActiveForm */
$kategori_barang = KategoriBarang::find()->all();

$array_kategori = \yii\helpers\ArrayHelper::map($kategori_barang, "kategori_id", "nama_kategori");
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'kode_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_id')->widget(Select2::classname(), [
        'data' => $array_kategori,
        'options' => [
            'placeholder' => 'Select a Kategori Barang ...',
            'z-index' => '9999999999'

        ]
        ,
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]); ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>
    <?php
    $data = isset($model->foto) ? [
        'pluginOptions' => [
            'initialPreview' => Yii::$app->request->baseUrl . '/barang/' . $model->foto,
            'initialPreviewAsData' => TRUE,
            'initialCaption' => [
                'value' => $model->nama_barang,
            ]
        ],
    ] : [];
    ?>
    <?= $form->field($model, 'foto')->widget(\kartik\file\FileInput::className(), $data, ['value' => $model->foto]) ?>
    <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>


    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
