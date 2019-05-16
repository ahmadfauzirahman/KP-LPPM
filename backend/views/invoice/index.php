<?php
/* @var $this yii\web\View */
$this->title = 'Invoice';
$this->params['breadcrumbs'][] = $this->title;
function tgl_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Transaksi ID</th>
                    <th>Tanggal Transksi Invoice</th>
                    <th>Kasir Bertugas</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach ($data as $v1): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>UMMI-INVOICE-<?= $v1->transaksi_id ?></td>
                        <td><?= tgl_indo($v1->tanggal_transaksi) ?></td>
                        <td><?= \common\models\User::findOne($v1->operator_id)['username'] ?></td>
                        <th><a target="_blank" href="?r=invoice/cetak&id=<?= $v1->transaksi_id ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Invoice</a></th>
                    </tr>
                    <?php $no++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>