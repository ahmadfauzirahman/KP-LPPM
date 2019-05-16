<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Barang;

/**
 * BarangSearch represents the model behind the search form about `common\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barang_id', 'kategori_id'], 'integer'],
            [['kode_barang', 'nama_barang', 'harga', 'foto', 'qty'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Barang::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'barang_id' => $this->barang_id,
            'kategori_id' => $this->kategori_id,
        ]);

        $query->andFilterWhere(['like', 'kode_barang', $this->kode_barang])
            ->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'harga', $this->harga])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'qty', $this->qty]);

        return $dataProvider;
    }
}
