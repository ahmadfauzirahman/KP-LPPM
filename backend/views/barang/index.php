<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Barang');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);
?>
<div class="barang-index">
    <div id="ajaxCrudDatatable">
        <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,
            'columns' => require(__DIR__ . '/_columns.php'),
            'toolbar' => [
                ['content' =>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'],
                        ['role' => 'modal-remote', 'title' => 'Tambah Data Barang', 'class' => 'btn btn-primary']) .
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                        ['data-pjax' => 1, 'class' => 'btn btn-danger', 'title' => 'Refersh Page Barang']),
                ],
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'heading' => '<i class="glyphicon glyphicon-list"></i> List Barang (قائمة البند)',
                'before' => '<h2>* List Barang Ummi .</h2>',
                'after' => BulkButtonWidget::widget([
                        'buttons' => Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All',
                            ["bulk-delete"],
                            [
                                "class" => "btn btn-danger btn-xs",
                                'role' => 'modal-remote-bulk',
                                'data-confirm' => false, 'data-method' => false,// for overide yii data api
                                'data-request-method' => 'post',
                                'data-confirm-title' => 'Are you sure?',
                                'data-confirm-message' => 'Are you sure want to delete this item'
                            ]),
                    ]) .
                    '<div class="clearfix"></div>',
            ]
        ]) ?>
    </div>
</div>
<?php
Modal::begin([
    "id" => "ajaxCrudModal",
    "footer" => "",
    "options" => ["tabindex" => "-1", "style" => "overflow:hidden"]// always need it for jquery plugin
]) ?>
<?php Modal::end(); ?>
