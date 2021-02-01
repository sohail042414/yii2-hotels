<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Package;

/**
 * SearchPackage represents the model behind the search form of `backend\models\Package`.
 */
class SearchPackage extends Package
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'expiration', 'unlimited_post', 'post_limit', 'sequence', 'sell_limit'], 'integer'],
            [['title', 'description', 'expiration_type', 'status', 'date_created', 'date_modified', 'ip_address'], 'safe'],
            [['price', 'promo_price'], 'number'],
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
        $query = Package::find();

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
            'package_id' => $this->package_id,
            'price' => $this->price,
            'promo_price' => $this->promo_price,
            'expiration' => $this->expiration,
            'unlimited_post' => $this->unlimited_post,
            'post_limit' => $this->post_limit,
            'sequence' => $this->sequence,
            'date_created' => $this->date_created,
            'date_modified' => $this->date_modified,
            'sell_limit' => $this->sell_limit,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'expiration_type', $this->expiration_type])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
