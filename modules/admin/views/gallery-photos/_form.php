<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GalleryPhotos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-photos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'base_file')->widget(trntv\filekit\widget\Upload::className(), ['url' => app\models\BaseModel::FILE_UPLOAD_URL, 'maxFileSize' => 1000000]) ?>

    <?= $form->field($model, 'photo_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([app\models\BaseModel::STATUS_ACTIVE => Yii::t('app', 'Published'), app\models\BaseModel::STATUS_INACTIVE => Yii::t('app', 'Not Published')]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
