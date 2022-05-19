<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Delegation;

/**
 * DelegationSearch represents the model behind the search form of `common\models\Delegation`.
 */
class DelegationSearch extends Delegation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name_lastname', 'date_from', 'date_to', 'place_departure', 'place_arrival'], 'safe'],
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
        $query = Delegation::find();

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
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
        ]);

        $query->andFilterWhere(['like', 'name_lastname', $this->name_lastname])
            ->andFilterWhere(['like', 'place_departure', $this->place_departure])
            ->andFilterWhere(['like', 'place_arrival', $this->place_arrival]);

        return $dataProvider;
    }
}
