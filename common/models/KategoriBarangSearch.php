<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KategoriBarang;

/**
 * KategoriBarangSearch represents the model behind the search form about `common\models\KategoriBarang`.
 */
class KategoriBarangSearch extends KategoriBarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategori_id'], 'integer'],
            [['nama_kategori', 'foto', 'updated_at', 'created_at'], 'safe'],
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
        $query = KategoriBarang::find();

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
            'kategori_id' => $this->kategori_id,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'nama_kategori', $this->nama_kategori])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
