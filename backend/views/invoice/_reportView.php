<?php
/**
 * Created by PhpStorm.
 * User: fauzi
 * Date: 2/16/2019
 * Time: 8:35 AM
 */

?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <!-- <div class="panel-heading">
                <h4>Invoice</h4>
            </div> -->
            <div class="panel-body">
                <div class="clearfix">
                    <div class="pull-left">
                        <h3 class="logo invoice-logo">Ummi</h3>
                    </div>
                    <div class="pull-right">
                        <h4>Invoice Tanggal #
                            <strong><?= date('d/m/Y', strtotime($data2['tanggal_transaksi'])) ?></strong>
                        </h4>
                    </div>
                </div>
                <hr>

                <div class="m-h-50"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered m-t-30">
                                <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama Barang</th>
                                    <th>QTY</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
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

                                        <?php $total = $total + ($barang->qty * $barang->harga);
                                        ?>
                                    </tr>
                                    <?php $no++; endforeach; ?>
                                <tr>
                                    <td colspan="4"><p align="right">Total</p></td>
                                    <td><?php echo $total; ?></td>
                                </tr>

                            </table>

                        </div>
                    </div>
                </div>

                <div class="hidden-print">
                    <div class="pull-right">
                        <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i
                                    class="fa fa-print"></i></a>
                        <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- end row -->