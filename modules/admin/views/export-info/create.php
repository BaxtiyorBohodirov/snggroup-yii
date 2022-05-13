<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExportInfo */

$this->title = Yii::t('app', 'Create Export Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Export Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="export-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
