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

    <?php 
    echo $form->field($model, 'ingredient_id1')->dropDownList(
        $data,
        [
            'prompt' => 'Select a ingredient 1 ...'
        ]) 
    ?>
    <?php 
    echo $form->field($model, 'ingredient_id2')->dropDownList(
        $data,
        [
            'prompt' => 'Select a ingredient 2 ...'
        ]) 
    ?>
    <?php 
    echo $form->field($model, 'ingredient_id3')->dropDownList(
        $data,
        [
            'prompt' => 'Select a ingredient 3 ...'
        ]) 
    ?>
    <?php 
    echo $form->field($model, 'ingredient_id4')->dropDownList(
        $data,
        [
            'prompt' => 'Select a ingredient 4 ...'
        ]) 
    ?>
    <?php 
    echo $form->field($model, 'ingredient_id5')->dropDownList(
        $data,
        [
            'prompt' => 'Select a ingredient 5 ...'
        ]) 
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
