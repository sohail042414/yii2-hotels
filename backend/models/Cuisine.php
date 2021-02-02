<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

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
            [['imageFile'], 'file', 'skipOnEmpty' => TRUE, 'extensions' => 'png,jpg,jpeg'],
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
            'imageFile' => Yii::t('app', 'Featured Image'),
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


    public function addCusine(){

        if(!$this->validate()){
            return FALSE;
        }

        $cusine = $this;
        $cusine->imageFile = UploadedFile::getInstance($cusine,'imageFile');
        if(!is_object($cusine->imageFile)){
            $cusine->save();
            return TRUE;
        }
        
        $featured_image = 'image-'.time(). "." .$this->imageFile->extension;
        $path = Yii::$app->settings->getUploadPath() . $featured_image;
        $cusine->featured_image =  $featured_image;
        $cusine->save();
        $cusine->imageFile->saveAs($path);

        return TRUE;
    }


    /*
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->featured_image = 'default-image.png';

        // ...custom code here...
        return true;
    }
    */
}
