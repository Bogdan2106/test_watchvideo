<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Section */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

<!--    --><?//= $form->field($model, 'image_id')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'create_at')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'create_by')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'update_at')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
