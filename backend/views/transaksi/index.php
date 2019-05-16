<?php
/* @var $this yii\web\View */
$this->title = "Transaksi";
$this->params['breadcrumbs'][] = $this->title;

$data2 = \common\models\Barang::find()->all();
$arra = \yii\helpers\ArrayHelper::map($data2, 'barang_id', 'nama_barang');
?>
<div class="row">
    <?php $form = \yii\widgets\ActiveForm::begin(); ?>
    <div class="col-lg-12">
        <div class="card-box">
            <table class="table table-bordered">
                <tr class="text-success">
                    <th>Form Transaksi</th>
                </tr>
                <tr>
                    <td>
                        <div class="col-lg-10">
                            <?= $form->field($model, 't_detail_id')->widget(\kartik\select2\Select2::classname(), [
                                'data' => $arra,
                                'options' => ['placeholder' => 'Pilih Nama Barang ...'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]); ?>                        </div>
                        <div class="col-lg-2">
                            <?= $form->field($model, 'qty')->textInput(['maxlength' => true, "placeholder" => "Jumlah/QTY"]) ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
                        <a href="<?= Yii::$app->urlManager->createUrl('transaksi/selesaibelanja') ?>"
                           class="btn btn-success">Selesai Transaksi</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php $form = \yii\widgets\ActiveForm::end(); ?>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <table class="table table-bordered">
                <thead>
                <tr class="success">
                    <th colspan="6">Detail Transaksi</th>
                </tr>

                <tr>
                    <th width="5%">No</th>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                    <th>Harga</th>
                    <th>Jumlah Harga</th>
                    <th width="5%">Cancel</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                $total = 0;

                foreach ($data as $barang): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= \common\models\Barang::findOne($barang->barang_id)['nama_barang'] ?></td>
                        <td><?= $barang->qty ?></td>
                        <td><?= $barang->harga ?></td>
                        <td><?= $barang->qty * $barang->harga ?></td>
                        <?php $id = $barang->t_detail_id ?>
                        <td><?= \yii\helpers\Html::a('Delete', ['transaksi/delete', 'id' => $barang->t_detail_id]) ?></td>
                        <?php $total = $total + ($barang->qty * $barang->harga);
                        ?>
                    </tr>
                    <?php $no++; endforeach; ?>
                <tr>
                    <td colspan="5"><p align="right">Total</p></td>
                    <td><?php echo $total; ?></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
