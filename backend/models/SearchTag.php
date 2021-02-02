<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tag;

/**
 * SearchTag represents the model behind the search form of `backend\models\Tag`.
 */
class SearchTag extends Tag
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag_id'], 'integer'],
            [['tag_name', 'slug', 'description', 'tag_name_trans', 'description_trans', 'date_created', 'ip_address'], 'safe'],
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
        $query = Tag::find();

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
            'tag_id' => $this->tag_id,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'tag_name', $this->tag_name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'tag_name_trans', $this->tag_name_trans])
            ->andFilterWhere(['like', 'description_trans', $this->description_trans])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
