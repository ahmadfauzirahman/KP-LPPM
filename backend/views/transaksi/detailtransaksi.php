<?php
/**
 * Created by PhpStorm.
 * User: fauzi
 * Date: 2/16/2019
 * Time: 12:01 AM
 */
$this->title = 'Invoice'
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
                        <h3 class="logo invoice-logo">Ummi Invoice</h3>
                    </div>
                    <div class="pull-right">
                        <h4>Invoice # <br>
                            <strong><?= date('d/m/Y', strtotime($data2['tanggal_transaksi'])) ?></strong>
                        </h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <div class="pull-left m-t-30">
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                        <div class="pull-right m-t-30">
                            <p><strong>Order Date: </strong> Jan 17, 2016</p>
                            <p class="m-t-10"><strong>Order Status: </strong> <span
                                        class="label label-pink">Pending</span></p>
                            <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="m-h-50"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered m-t-30">
                                <thead>
                                <tr class="success">
                                    <th colspan="6">Detail Transaksi</th>
                                </tr>

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
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="clearfix m-t-40">
                            <h5 class="small text-inverse font-600">PAYMENT TERMS AND POLICIES</h5>

                            <small>
                                All accounts are to be paid within 7 days from receipt of
                                invoice. To be paid by cheque or credit card or direct payment
                                online. If account is not paid within 7 days the credits details
                                supplied as confirmation of work undertaken will be charged the
                                agreed quoted fee noted above.
                            </small>
                        </div>
                    </div>
                </div>
                <hr>
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
