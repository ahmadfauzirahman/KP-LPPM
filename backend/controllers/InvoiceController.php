<?php

namespace backend\controllers;

use common\models\Transaksi;
use common\models\TransaksiDetail;
use kartik\mpdf\Pdf;

class InvoiceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = Transaksi::find()->all();
        return $this->render('index', ["data" => $data]);
    }

    public function actionCetak($id)
    {
        $data = TransaksiDetail::find()->where(['transaksi_id' => $id])->all();
        $data2 = Transaksi::findOne($id);
        $content = $this->renderPartial('_reportView', ["data" => $data, "data2" => $data2]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_LANDSCAPE,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@backend/web/assets/css/bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => 'invoice-logo {color: #188ae2 !important},table { border-spacing: 10px;
    border-collapse: separate;},td,th {padding: 10px;} .table {border-collapse: collapse !important}.table td, .table th {background-color: #fff !important}.table-bordered td, .table-bordered th {border: 1px solid #ddd !important}
            
            ',
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],            // call mPDF methods on the fly
            'methods' => [
                'SetHeader' => ['Ummi'],
                'SetFooter' => ['{PAGENO}'],
            ]
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }
}
