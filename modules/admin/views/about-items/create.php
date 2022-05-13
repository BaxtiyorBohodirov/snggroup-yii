<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AboutItems */

$this->title = Yii::t('app', 'Create About Items');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
