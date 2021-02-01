<?php

namespace backend\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "{{%cuisine}}".
 *
 * @property int $cuisine_id
 * @property string $cuisine_name
 * @property int $sequence
 * @property string $date_created
 * @property string $date_modified
 * @property string $ip_address
 * @property string|null $cuisine_name_trans
 * @property string $status
 * @property string $featured_image
 * @property string $slug
 */
class Cuisine extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cuisine}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cuisine_name'], 'required'],
            [['sequence'], 'integer'],
            [['date_created', 'date_modified'], 'safe'],
            [['cuisine_name_trans'], 'string'],
            [['cuisine_name', 'featured_image', 'slug'], 'string', 'max' => 255],
            [['ip_address'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 100],
            //[['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cuisine_id' => Yii::t('app', 'Cuisine ID'),
            'cuisine_name' => Yii::t('app', 'Cuisine Name'),
            'sequence' => Yii::t('app', 'Sequence'),
            'date_created' => Yii::t('app', 'Date Created'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'cuisine_name_trans' => Yii::t('app', 'Cuisine Name Trans'),
            'status' => Yii::t('app', 'Status'),
            'featured_image' => Yii::t('app', 'Featured Image'),
            'slug' => Yii::t('app', 'Slug'),
            //'imageFile' => Yii::t('app', 'Featured Image'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return CuisineQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CuisineQuery(get_called_class());
    }

    /*
    
    public function upload()
    {
         if ($this->validate()) {

            $newName = 'cusine-' .rand(0,1000) . '-' . time() . '-image.' . $this->imageFile->extension;

            if ($this->imageFile->saveAs(Url::to('@frontend/web/uploads/') . $newName)) {
                return TRUE;
            }

            // $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            // return true;
        } 

        return FALSE;
    }
    */

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->featured_image = 'default-image.png';

        // ...custom code here...
        return true;
    }
}
