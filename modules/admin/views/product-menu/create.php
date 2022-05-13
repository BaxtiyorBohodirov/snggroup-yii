<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductMenu */

$this->title = Yii::t('app', 'Create Product Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
