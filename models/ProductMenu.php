<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_menu".
 *
 * @property int $id
 * @property string $image
 * @property string $menu_uz
 * @property string $menu_en
 * @property string $menu_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $sub_content_uz
 * @property string $sub_content_ru
 * @property string $sub_content_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $product_id
 * @property int $status
 * @property int $order
 *
 * @property Products $product
 */
class ProductMenu extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_content_uz', 'sub_content_ru', 'sub_content_en', 'content_uz', 'content_ru', 'content_en'], 'string'],
            [['product_id', 'status', 'order'], 'integer'],
            [['image', 'menu_uz', 'menu_en', 'menu_ru', 'title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
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
            'menu_uz' => Yii::t('app', 'Menu Uz'),
            'menu_en' => Yii::t('app', 'Menu En'),
            'menu_ru' => Yii::t('app', 'Menu Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'sub_content_uz' => Yii::t('app', 'Sub Content Uz'),
            'sub_content_ru' => Yii::t('app', 'Sub Content Ru'),
            'sub_content_en' => Yii::t('app', 'Sub Content En'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'product_id' => Yii::t('app', 'Product ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
  
}
