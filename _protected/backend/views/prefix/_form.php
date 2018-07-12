<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Prefix */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prefix-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'prefix_id')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'prefix_name')->textInput(['maxlength' => true]) ?>

     <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่มข้อมูล' : 'แก้ไขข้อมูล', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
