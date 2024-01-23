<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Absensi;

/**
 * AbsensiSearch represents the model behind the search form of `app\models\Absensi`.
 */
class AbsensiSearch extends Absensi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'semester', 'sks'], 'integer'],
            [['nama_matkul', 'prodi', 'tanggal', 'jam_masuk', 'jam_keluar', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Absensi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'semester' => $this->semester,
            'sks' => $this->sks,
            'tanggal' => $this->tanggal,
            'jam_masuk' => $this->jam_masuk,
            'jam_keluar' => $this->jam_keluar,
        ]);

        $query->andFilterWhere(['like', 'nama_matkul', $this->nama_matkul])
            ->andFilterWhere(['like', 'prodi', $this->prodi])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
