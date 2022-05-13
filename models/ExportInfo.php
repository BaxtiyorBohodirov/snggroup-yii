<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "export_info".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $sub_content_uz
 * @property string $sub_content_ru
 * @property string $sub_content_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $country_id
 * @property int $status
 * @property int $order
 */
class ExportInfo extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'export_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id', 'status', 'order'], 'integer'],
            [['content_uz', 'content_ru', 'content_en'],'string'],
            [['title_uz', 'title_ru', 'title_en', 'sub_content_uz', 'sub_content_ru', 'sub_content_en'], 'string', 'max' => 255],
            [['base_file', 'base_files','video_file'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'sub_content_uz' => Yii::t('app', 'Sub Content Uz'),
            'sub_content_ru' => Yii::t('app', 'Sub Content Ru'),
            'sub_content_en' => Yii::t('app', 'Sub Content En'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'country_id' => Yii::t('app', 'Country ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
    public function getCountry()
    {
        return $this->hasOne(Country::className(),['id'=>'country_id']);
    }
}
