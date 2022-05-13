<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'base_file')->widget(trntv\filekit\widget\Upload::className(), ['url' => app\models\BaseModel::FILE_UPLOAD_URL, 'maxFileSize' => 1000000]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
