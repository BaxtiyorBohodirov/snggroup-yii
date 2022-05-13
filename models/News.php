<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $image
 * @property string $big_image
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $sub_content_uz
 * @property string $sub_content_ru
 * @property string $sub_content_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $created_at
 * @property int $updated_at
 * @property string $date
 * @property int $status
 * @property int $order
 * @property int $views
 * @property string $slug
 */
class News extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_content_uz', 'sub_content_ru', 'sub_content_en', 'content_uz', 'content_ru', 'content_en'], 'string'],
            [['created_at', 'updated_at', 'status', 'order', 'views'], 'integer'],
            [['image', 'big_image', 'title_uz', 'title_ru', 'title_en', 'date', 'slug'], 'string', 'max' => 255],
            [['base_file', 'base_files','video_file'], 'safe'],
            [['base_file2', 'base_files','video_file'], 'safe'],
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
            'big_image' => Yii::t('app', 'Big Image'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'sub_content_uz' => Yii::t('app', 'Sub Content Uz'),
            'sub_content_ru' => Yii::t('app', 'Sub Content Ru'),
            'sub_content_en' => Yii::t('app', 'Sub Content En'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'date' => Yii::t('app', 'Date'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
            'views' => Yii::t('app', 'Views'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }
    public function updateViews()
    {
        $this->views=$this->views+1;
        if($this->save())
        {
            return true;
        }
    }
}
