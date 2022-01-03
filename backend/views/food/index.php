<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Food;
use common\models\Ingredient;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\FoodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Food', ['create'], ['class' => 'btn btn-primary btn-md']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        // 'options' => ['style' => 'width:300px'],
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'contentOptions' => [
                    'style' => 'width:70px'
                ]
            ],
            [
                'attribute' => 'name',
                'label' => 'Name',
                'format' => 'html',
                'value' => function($data){
                    return '<b>'.$data['name'].'</b>';
                }
             ],
            [
                'attribute' => 'ingredient_id1',
                'content' => function($data){
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id1']]);
                        return $ingredient['name'];
                    
                }
            ],
            [
                'attribute' => 'ingredient_id2',
                'content' => function($data){
                         $ingredient = Ingredient::findOne(['id' => $data['ingredient_id2']]);
                        return $ingredient['name'];
                }
            ],
            [
                'attribute' => 'ingredient_id3',
                'content' => function($data){       
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id3']]);
                        return $ingredient['name'];
                }
            ],
            [
                'attribute' => 'ingredient_id4',
                'content' => function($data){
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id4']]);
                        return $ingredient['name'];
                }
            ],
            [
                'attribute' => 'ingredient_id5',
                'content' => function($data){          
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id5']]);
                        return $ingredient['name'];
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Food $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'contentOptions' => ['style' => 'width:90px']
            ],
        ],
    ]); ?>


</div>
