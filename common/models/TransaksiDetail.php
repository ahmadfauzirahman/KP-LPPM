<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi_detail".
 *
 * @property int $t_detail_idw
 * @property int $barang_id
 * @property int $qty
 * @property int $transaksi_id
 * @property int $harga
 * @property string $status 1= sudah diproses , 0 belum diproses
 */
class TransaksiDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['barang_id', 'qty', 'transaksi_id', 'harga'], 'integer',"message"=>"Harus Berupa Angka"],
            [['transaksi_id', 'qty'], 'required'],
            [['status'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't_detail_id' => 'T Detail ID',
            'barang_id' => 'Barang ID',
            'qty' => 'Qty',
            'transaksi_id' => 'Transaksi ID',
            'harga' => 'Harga',
            'status' => 'Status',
        ];
    }
}
