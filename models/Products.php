<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $image
 * @property string $big_image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $content_uz
 * @property string $content_en
 * @property string $content_ru
 * @property int $parent_id
 * @property int $category_id
 * @property int $status
 * @property int $order
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_desc
 * @property string $slug
 *
 * @property Categories $category
 * @property Categories $parent
 */
class Products extends BaseModel
{
    /**
     * {@inheritdoc}
     */

     public static function tableName()
    {
        return 'products';
    }

    public function behaviors()
    {
        $parent=parent::behaviors();
        $parent[]=[
            'class'=>UploadBehavior::className(),
            'attribute'=>'base_files',
            'multiple'=>true,
            'uploadRelation'=>'productImages',
            'pathAttribute'=>'image',
            'baseUrlAttribute'=>false,
        ];
        return $parent;
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_uz', 'content_en', 'content_ru'], 'string'],
            [['parent_id', 'category_id', 'status', 'order'], 'integer'],
            [['image', 'big_image', 'title_uz', 'title_en', 'title_ru', 'meta_title', 'meta_keywords', 'meta_desc', 'slug'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['base_file', 'base_files','base_file2','video_file'], 'safe'],
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
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_en' => Yii::t('app', 'Content En'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_keywords' => Yii::t('app', 'Meta Keywords'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
    }
    public function getProductMenus()
    {
        return $this->hasMany(ProductMenu::className(),['product_id'=>'id']);
    }
    public function getProductImages()
    {
        return $this->hasMany(ProductImages::className(),['parent_id'=>'id']);
    }
}
