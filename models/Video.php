<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $video
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 * @property int $order
 */
class Video extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'status', 'order'], 'integer'],
            [['video', 'title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
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
            'video' => Yii::t('app', 'Video'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
}
