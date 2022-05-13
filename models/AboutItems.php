<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about_items".
 *
 * @property int $id
 * @property int $year
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property int $status
 * @property int $order
 */
class AboutItems extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'status', 'order'], 'integer'],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
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
            'year' => Yii::t('app', 'Year'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
}
