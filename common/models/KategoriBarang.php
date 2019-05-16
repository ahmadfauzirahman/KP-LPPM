<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kategori_barang".
 *
 * @property int $kategori_id
 * @property string $nama_kategori
 * @property string $foto
 * @property string $updated_at
 * @property string $created_at
 */
class KategoriBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori', 'updated_at', 'created_at'], 'required'],
            [

                ['foto'],
                'file',
                'skipOnEmpty' => TRUE,
                'extensions' => 'png, jpg',
            ],
            [['updated_at', 'created_at'], 'safe'],
            [['nama_kategori'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kategori_id' => 'Kategori ID',
            'nama_kategori' => 'Nama Kategori',
            'foto' => 'Foto',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
