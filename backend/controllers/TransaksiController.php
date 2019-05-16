<?php

namespace backend\controllers;

use common\models\Barang;
use common\models\Transaksi;
use common\models\TransaksiDetail;
use Yii;
use yii\web\NotFoundHttpException;

class TransaksiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new TransaksiDetail();
        $data = TransaksiDetail::find()->where(["status" => "0"])->all();

        if (Yii::$app->request->isPost) {
//            echo "<pre>";
            $post = Yii::$app->request->post();
            $id_barang = $post['TransaksiDetail']['t_detail_id'];
            $qty = $post['TransaksiDetail']['qty'];
            $ambilHarga = Barang::findOne($id_barang)['harga'];
            $ambilId = Barang::findOne($id_barang)['barang_id'];

            $model->barang_id = $ambilId;
            $model->qty = $qty;
            $model->harga = $ambilHarga;
            $model->status = "0";
            $model->transaksi_id = 0;
            $model->save();
            Yii::$app->session->setFlash('success', 'Data Barang Berhasil Ditambahkan');
            return $this->redirect(['index', "data" => $data]);

        }
        return $this->render('index', ['model' => $model,
            "data" => $data]);

    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        $model = new TransaksiDetail();
        $data = TransaksiDetail::find()->where(["status" => "0"])->all();
        Yii::$app->session->setFlash('success', 'Data Transaksi Berhasil Dihapus');

        return $this->redirect(['index', 'model' => $model,
            "data" => $data]);
    }

    public function actionSelesaibelanja()
    {
        $tanggal = date('Y-m-d');
        $user = Yii::$app->user->identity->id;
        //save tabel transaksi
        $modelTransaksi = new Transaksi();
        $modelTransaksi->tanggal_transaksi = $tanggal;
        $modelTransaksi->operator_id = $user;
        $modelTransaksi->save();

        $last_id = Yii::$app->db->createCommand("select transaksi_id from transaksi order by transaksi_id desc")->queryOne();
        Yii::$app->db->createCommand("update transaksi_detail set transaksi_id='" . $last_id['transaksi_id'] . "' where status='0'")->execute();
        Yii::$app->db->createCommand("update transaksi_detail set status='1' where status='0'")->execute();
        Yii::$app->session->setFlash('success', 'Transaksi Berhasil!');

        return $this->redirect(['detailtransaksi', 'id' => $last_id['transaksi_id']]);
    }

    public function actionDetailtransaksi($id)
    {
        $data = TransaksiDetail::find()->where(['transaksi_id' => $id])->all();
        $data2 = Transaksi::findOne($id);
        return $this->render("detailtransaksi", ["data" => $data, "data2" => $data2]);
    }


    protected function findModel($id)
    {
        if (($model = TransaksiDetail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
