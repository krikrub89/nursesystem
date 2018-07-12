<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonnelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personnel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' =>['data-pjax' => true]
    ]); ?>

  <div class="input-group">
      <?= Html::activeTextInput($model, 'q',['class'=>'form-control','placeholder'=>'ค้นหาข้อมูล...']) ?>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> ค้นหา</button>
      
      </span>
    </div>
    <?php ActiveForm::end(); ?>

</div>

</div>
