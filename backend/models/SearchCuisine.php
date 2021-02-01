<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cuisine;

/**
 * SearchCuisine represents the model behind the search form of `backend\models\Cuisine`.
 */
class SearchCuisine extends Cuisine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cuisine_id', 'sequence'], 'integer'],
            [['cuisine_name', 'date_created', 'date_modified', 'ip_address', 'cuisine_name_trans', 'status', 'featured_image', 'slug'], 'safe'],
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
        $query = Cuisine::find();

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
            'cuisine_id' => $this->cuisine_id,
            'sequence' => $this->sequence,
            'date_created' => $this->date_created,
            'date_modified' => $this->date_modified,
        ]);

        $query->andFilterWhere(['like', 'cuisine_name', $this->cuisine_name])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'cuisine_name_trans', $this->cuisine_name_trans])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'featured_image', $this->featured_image])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
