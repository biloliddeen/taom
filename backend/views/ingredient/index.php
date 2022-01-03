<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use common\models\Ingredient;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Search\IngredientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ingredients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingredient-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ingredient', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            [ 
                'attribute' => 'id',
                'contentOptions' => [
                    'style' => 'width:70px'
                ]
            ],
            'name',
            [ 
                'attribute' => 'status',
                'format' => 'html',
                'filter' => ['' => 'All' ,'1' => 'Active', '0' => 'Inactive'],
                'content' => function($data){
                    if($data['status'] === 1){
                        return "<span class='badge badge-success'>active</span>";
                    }
                    return "<span class='badge badge-danger'>inactive</span>";
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ingredient $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'contentOptions' => ['style' => 'width:90px']
            ],
        ],
    ]); ?>


</div>
