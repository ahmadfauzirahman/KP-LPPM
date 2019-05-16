<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $barang_id
 * @property string $kode_barang
 * @property int $kategori_id
 * @property string $nama_barang
 * @property string $harga
 * @property string $foto
 * @property string $qty
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_id'], 'integer'],
            [['kode_barang'], 'string', 'max' => 200],
            [['nama_barang'], 'string', 'max' => 100],
            [['harga'], 'string', 'max' => 250],
            [

                ['foto'],
                'file',
                'skipOnEmpty' => TRUE,
                'extensions' => 'png, jpg',
            ],
            [['qty'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'barang_id' => 'Barang ID',
            'kode_barang' => 'Kode Barang',
            'kategori_id' => 'Kategori Barang',
            'nama_barang' => 'Nama Barang',
            'harga' => 'Harga',
            'foto' => 'Foto',
            'qty' => 'Qty',
        ];
    }
}
