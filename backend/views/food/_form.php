<?php

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;
use common\models\Ingredient;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-form">

    <?php $form = ActiveForm::begin(); 
    $data = ArrayHelper::map(Ingredient::find()->all(),'id','name');
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ingredient_id1')->widget(Select2::classname(),[
        'data' => $data,
        'options' => ['placeholder' => 'Select a Ingredient 1'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])?>
    <?php echo $form->field($model, 'ingredient_id2')->widget(Select2::classname(),[
        'data' => $data,
        'options' => ['placeholder' => 'Select a Ingredient 2'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])?>
    <?php echo $form->field($model, 'ingredient_id3')->widget(Select2::classname(),[
        'data' => $data,
        'options' => ['placeholder' => 'Select a Ingredient 3'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])?>
    <?php echo $form->field($model, 'ingredient_id4')->widget(Select2::classname(),[
        'data' => $data,
        'options' => ['placeholder' => 'Select a Ingredient 4'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])?>
    <?php echo $form->field($model, 'ingredient_id5')->widget(Select2::classname(),[
        'data' => $data,
        'options' => ['placeholder' => 'Select a Ingredient 5'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
