<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Merchant;

/**
 * SearchMerchant represents the model behind the search form of `backend\models\Merchant`.
 */
class SearchMerchant extends Merchant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['merchant_id', 'free_delivery', 'package_id', 'payment_steps', 'is_featured', 'is_ready', 'is_sponsored', 'user_lang', 'sort_featured', 'is_commission', 'country_id', 'state_id', 'city_id', 'area_id', 'merchant_type', 'invoice_terms'], 'integer'],
            [['restaurant_slug', 'restaurant_name', 'restaurant_phone', 'contact_name', 'contact_phone', 'contact_email', 'country_code', 'street', 'city', 'state', 'post_code', 'cuisine', 'service', 'delivery_estimation', 'username', 'password', 'activation_key', 'activation_token', 'status', 'date_created', 'date_modified', 'date_activated', 'last_login', 'ip_address', 'membership_expired', 'sponsored_expiration', 'lost_password_code', 'membership_purchase_date', 'abn', 'session_token', 'commision_type', 'mobile_session_token', 'merchant_key', 'latitude', 'lontitude', 'country_name', 'logo', 'payment_gateway_ref', 'user_access', 'distance_unit'], 'safe'],
            [['package_price', 'percent_commision', 'delivery_charges', 'minimum_order', 'delivery_minimum_order', 'delivery_maximum_order', 'pickup_minimum_order', 'pickup_maximum_order', 'delivery_distance_covered'], 'number'],
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
        $query = Merchant::find();

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
            'merchant_id' => $this->merchant_id,
            'free_delivery' => $this->free_delivery,
            'date_created' => $this->date_created,
            'date_modified' => $this->date_modified,
            'date_activated' => $this->date_activated,
            'last_login' => $this->last_login,
            'package_id' => $this->package_id,
            'package_price' => $this->package_price,
            'membership_expired' => $this->membership_expired,
            'payment_steps' => $this->payment_steps,
            'is_featured' => $this->is_featured,
            'is_ready' => $this->is_ready,
            'is_sponsored' => $this->is_sponsored,
            'sponsored_expiration' => $this->sponsored_expiration,
            'user_lang' => $this->user_lang,
            'membership_purchase_date' => $this->membership_purchase_date,
            'sort_featured' => $this->sort_featured,
            'is_commission' => $this->is_commission,
            'percent_commision' => $this->percent_commision,
            'delivery_charges' => $this->delivery_charges,
            'minimum_order' => $this->minimum_order,
            'delivery_minimum_order' => $this->delivery_minimum_order,
            'delivery_maximum_order' => $this->delivery_maximum_order,
            'pickup_minimum_order' => $this->pickup_minimum_order,
            'pickup_maximum_order' => $this->pickup_maximum_order,
            'country_id' => $this->country_id,
            'state_id' => $this->state_id,
            'city_id' => $this->city_id,
            'area_id' => $this->area_id,
            'merchant_type' => $this->merchant_type,
            'invoice_terms' => $this->invoice_terms,
            'delivery_distance_covered' => $this->delivery_distance_covered,
        ]);

        $query->andFilterWhere(['like', 'restaurant_slug', $this->restaurant_slug])
            ->andFilterWhere(['like', 'restaurant_name', $this->restaurant_name])
            ->andFilterWhere(['like', 'restaurant_phone', $this->restaurant_phone])
            ->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'contact_phone', $this->contact_phone])
            ->andFilterWhere(['like', 'contact_email', $this->contact_email])
            ->andFilterWhere(['like', 'country_code', $this->country_code])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'post_code', $this->post_code])
            ->andFilterWhere(['like', 'cuisine', $this->cuisine])
            ->andFilterWhere(['like', 'service', $this->service])
            ->andFilterWhere(['like', 'delivery_estimation', $this->delivery_estimation])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'activation_key', $this->activation_key])
            ->andFilterWhere(['like', 'activation_token', $this->activation_token])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'lost_password_code', $this->lost_password_code])
            ->andFilterWhere(['like', 'abn', $this->abn])
            ->andFilterWhere(['like', 'session_token', $this->session_token])
            ->andFilterWhere(['like', 'commision_type', $this->commision_type])
            ->andFilterWhere(['like', 'mobile_session_token', $this->mobile_session_token])
            ->andFilterWhere(['like', 'merchant_key', $this->merchant_key])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'lontitude', $this->lontitude])
            ->andFilterWhere(['like', 'country_name', $this->country_name])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'payment_gateway_ref', $this->payment_gateway_ref])
            ->andFilterWhere(['like', 'user_access', $this->user_access])
            ->andFilterWhere(['like', 'distance_unit', $this->distance_unit]);

        return $dataProvider;
    }
}
