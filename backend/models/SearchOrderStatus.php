<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderStatus;

/**
 * SearchOrderStatus represents the model behind the search form of `backend\models\OrderStatus`.
 */
class SearchOrderStatus extends OrderStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stats_id', 'merchant_id'], 'integer'],
            [['description', 'date_created', 'date_modified', 'ip_address'], 'safe'],
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
        $query = OrderStatus::find();

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
            'stats_id' => $this->stats_id,
            'merchant_id' => $this->merchant_id,
            'date_created' => $this->date_created,
            'date_modified' => $this->date_modified,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
