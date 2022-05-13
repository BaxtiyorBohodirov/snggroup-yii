<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $phone
 * @property string $email
 * @property string $address_uz
 * @property string $address_ru
 * @property string $address_en
 * @property double $lat
 * @property double $long
 * @property int $status
 * @property int $order
 */
class Contacts extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lat', 'long'], 'number'],
            [['status', 'order'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'phone', 'email', 'address_uz', 'address_ru', 'address_en'], 'string', 'max' => 255],
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
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'address_uz' => Yii::t('app', 'Address Uz'),
            'address_ru' => Yii::t('app', 'Address Ru'),
            'address_en' => Yii::t('app', 'Address En'),
            'lat' => Yii::t('app', 'Lat'),
            'long' => Yii::t('app', 'Long'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
}
