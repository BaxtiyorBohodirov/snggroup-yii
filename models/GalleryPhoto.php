<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\base\Behavior;

/**
 * This is the model class for table "gallery_photo".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property int $status
 * @property int $order
 */
class GalleryPhoto extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery_photo';
    }
    public function behaviors()
    {
        $behaviors=parent::behaviors();
        $behaviors[]=[
            'class'=>UploadBehavior::className(),
            'attribute'=>'base_files',
            'multiple'=>true,
            'uploadRelation'=>'galleryPhotos',
            'pathAttribute'=>'image',
            'baseUrlAttribute'=>false,
        ];
        return $behaviors;
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
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
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
    public function getGalleryPhotos()
    {
        return $this->hasMany(GalleryPhotos::className(),['photo_id'=>'id']);
    }
}
