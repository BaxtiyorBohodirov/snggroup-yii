<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $parent_id
 * @property int $status
 * @property int $order
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_desc
 * @property string $slug
 */
class Categories extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_uz', 'content_en', 'content_ru'], 'string'],
            [['parent_id', 'status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_en', 'title_ru', 'meta_title', 'meta_keywords', 'meta_desc', 'slug'], 'string', 'max' => 255],
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
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_keywords' => Yii::t('app', 'Meta Keywords'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }
    public function getProducts()
    {
        return $this->hasMany(Products::className(),['parent_id'=>'id']);
    }
}
