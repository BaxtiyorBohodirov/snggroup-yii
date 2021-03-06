<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ProductMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Product Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p> -->
        <?= Html::a(Yii::t('app', 'Create Product Menu'), ['create'], ['class' => 'btn btn-success']) ?>
    <!-- </p> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'image',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->image, ['style' => 'max-width:100px']);
                },
                'format' => 'html'
            ],
            'menu_uz',
            'menu_en',
            'menu_ru',
            'title_uz',
            //'title_en',
            //'title_ru',
            //'sub_content_uz:ntext',
            //'sub_content_ru:ntext',
            //'sub_content_en:ntext',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'product_id',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == app\models\BaseModel::STATUS_ACTIVE ? Html::tag('span', Yii::t('app', 'Published'), ['class' => 'label label-success']) : Html::tag('span', Yii::t('app', 'Not published'), ['class' => 'label label-danger']);
                },
                'format' => 'html',
                'filter' => [
                    app\models\BaseModel::STATUS_ACTIVE => Yii::t('app', 'Published'),
                    app\models\BaseModel::STATUS_INACTIVE => Yii::t('app', 'Not published')
                ]
            ],
            //'order',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function($url, $model) {
                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-eye']) . ' View', $url, ['class' => 'btn btn-success']);
                    },
                    'update' => function($url, $model) {
                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-pencil']) . ' Update', $url, ['class' => 'btn btn-primary']);
                    },
                    'delete' => function($url, $model) {
                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-delete']) . ' Delete', $url, [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ]
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>
</div>
