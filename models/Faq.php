<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $sub_content_uz
 * @property string $sub_content_ru
 * @property string $sub_content_en
 * @property int $status
 * @property int $order
 */
class Faq extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_content_uz', 'sub_content_ru', 'sub_content_en'], 'string'],
            [['status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
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
            'image' => Yii::t('app', 'Image'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'sub_content_uz' => Yii::t('app', 'Sub Content Uz'),
            'sub_content_ru' => Yii::t('app', 'Sub Content Ru'),
            'sub_content_en' => Yii::t('app', 'Sub Content En'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
}
