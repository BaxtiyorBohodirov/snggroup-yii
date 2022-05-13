<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones".
 *
 * @property int $id
 * @property string $phone
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $telegram
 * @property string $whatsap
 * @property int $status
 * @property int $order
 */
class Phones extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order'], 'integer'],
            [['phone', 'title_uz', 'title_ru', 'title_en', 'telegram', 'whatsap'], 'string', 'max' => 255],
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
            'phone' => Yii::t('app', 'Phone'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'telegram' => Yii::t('app', 'Telegram'),
            'whatsap' => Yii::t('app', 'Whatsap'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
    
}
