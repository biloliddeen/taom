<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Ingredient;

/* @var $this yii\web\View */
/* @var $model common\models\Food */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Foods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="food-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
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
                'value' => function($data){
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id1']]);
                        return $ingredient['name'];
                    
                }
            ],
            [
                'attribute' => 'ingredient_id2',
                'value' => function($data){
                         $ingredient = Ingredient::findOne(['id' => $data['ingredient_id2']]);
                        return $ingredient['name'];
                }
            ],
            [
                'attribute' => 'ingredient_id3',
                'value' => function($data){       
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id3']]);
                        return $ingredient['name'];
                }
            ],
            [
                'attribute' => 'ingredient_id4',
                'value' => function($data){
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id4']]);
                        return $ingredient['name'];
                }
            ],
            [
                'attribute' => 'ingredient_id5',
                'value' => function($data){          
                        $ingredient = Ingredient::findOne(['id' => $data['ingredient_id5']]);
                        return $ingredient['name'];
                }
            ],
        ],
    ]) ?>

</div>
