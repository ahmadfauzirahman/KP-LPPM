<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriBarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-barang-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_kategori')->textInput(['maxlength' => true]) ?>

    <?php
    $data = isset($model->foto) ? [
        'pluginOptions' => [
            'initialPreview' => Yii::$app->request->baseUrl.'/foto-barang/' . $model->foto,
            'initialPreviewAsData' => TRUE,
            'initialCaption' => [
                'value' => $model->nama_kategori,
            ]
        ],
    ] : [];
    ?>
    <?= $form->field($model, 'foto')->widget(\kartik\file\FileInput::className(), $data, ['value' => $model->foto]) ?>

    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
