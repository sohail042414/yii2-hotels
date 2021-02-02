<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tags}}".
 *
 * @property int $tag_id
 * @property string $tag_name
 * @property string $slug
 * @property string|null $description
 * @property string|null $tag_name_trans
 * @property string|null $description_trans
 * @property string $date_created
 * @property string $ip_address
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tags}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'tag_name_trans', 'description_trans'], 'string'],
            [['date_created'], 'safe'],
            [['tag_name', 'slug'], 'string', 'max' => 255],
            [['ip_address'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => Yii::t('app', 'Tag ID'),
            'tag_name' => Yii::t('app', 'Tag Name'),
            'slug' => Yii::t('app', 'Slug'),
            'description' => Yii::t('app', 'Description'),
            'tag_name_trans' => Yii::t('app', 'Tag Name Trans'),
            'description_trans' => Yii::t('app', 'Description Trans'),
            'date_created' => Yii::t('app', 'Date Created'),
            'ip_address' => Yii::t('app', 'Ip Address'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TagQuery(get_called_class());
    }

    
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->slug = Yii::$app->settings->getSlug($this->tag_name);

        // ...custom code here...
        return true;
    }    
}
