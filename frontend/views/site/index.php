<?php

/* @var $this yii\web\View */

use yii\bootstrap4\Html;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Ingredient;
use yii\bootstrap4\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container">
        <div class='row justify-content-center' >
            <div class='col-10'>

                <?php $form = ActiveForm::begin(['id' => 'search-form']); ?>
                
                <?php $data = ArrayHelper::map(Ingredient::find()->all(),'id','name');?>

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
                    <?php echo Html::submitButton('Search', [
                        'class' => 'btn btn-primary',
                        'name' => 'search-form'
                        ])?>
                </div>

                <?php ActiveForm::end();?>
    
            </div>
            <div class="col-10">
              <?php 
                
                if(!empty($one) && isset($one)){
                    foreach($one as $one){
                        echo '<p class="alert alert-success" style="color:green; font: Tahoma 18px bold"><b>';
                        echo $one;
                        echo '</b></p>';
                    }
              } 
              else {
                    if(!empty($two) && isset($two)){
                        foreach($two as $two){
                                echo '<p class="alert alert-primary" style="color:blue; font: Tahoma 18px bold">';
                                echo $two['name']. " <b>".$two['count']."</b>";
                                echo '</p>';
                            }
                    } else{
                        if(!empty($three) && isset($three)){
                        echo '<p class="alert alert-danger" style="color:red; font: Tahoma 18px bold">';
                            echo $three[0];
                        echo '</p>';
                        }
                    }
              }
            


              ?>
            </div>
        </div>
    </div>
</div>
