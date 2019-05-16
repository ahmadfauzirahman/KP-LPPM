<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $transaksi_id
 * @property string $tanggal_transaksi
 * @property int $operator_id
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_transaksi', 'operator_id'], 'required'],
            [['tanggal_transaksi'], 'safe'],
            [['operator_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transaksi_id' => 'Transaksi ID',
            'tanggal_transaksi' => 'Tanggal Transaksi',
            'operator_id' => 'Operator ID',
        ];
    }
}
