<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GalleryPhotos */

$this->title = Yii::t('app', 'Create Gallery Photos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gallery Photos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-photos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
