<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Prefix */

    //$this->title = 'เพิ่มข้อมูล คำนำหน้า';
$this->params['breadcrumbs'][] = ['label' => 'Prefixes', 'url' => ['index']];
$this->params['breadcrumbs'][] ='เพิ่มข้อมูล คำนำหน้า';
?>
<div class="prefix-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
