<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Contractor;

/**
 * ContractorSearch represents the model behind the search form of `common\models\Contractor`.
 */
class ContractorSearch extends Contractor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vat', 'is_deleted'], 'integer'],
            [['nip', 'region', 'name', 'street', 'house_number', 'apartment_number'], 'safe'],
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
        $query = Contractor::find();

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
            'vat' => $this->vat,
            'is_deleted' => 0,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'house_number', $this->house_number])
            ->andFilterWhere(['like', 'apartment_number', $this->apartment_number]);

        return $dataProvider;
    }
}