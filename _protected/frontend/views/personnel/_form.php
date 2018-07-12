<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personnel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personnel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'person_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prefix_id')->textInput() ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_birthday')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'levelposition_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'startworkdate')->textInput() ?>

    <?= $form->field($model, 'np_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apn_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'degree_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
