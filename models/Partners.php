<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property int $status
 * @property int $order
 * @property string $link
 */
class Partners extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_ru', 'title_en', 'link'], 'string', 'max' => 255],
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
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
            'link' => Yii::t('app', 'Link'),
        ];
    }
}
