<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลรายบุคคล';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personnel-index">

    <h1><?php //Html::encode($this->title) ?></h1>
    <?php yii\widgets\Pjax::begin(['id' => 'grid-user-pjax','timeout'=>5000]) ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Personnel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'person_id',
            
            [
                'attribute' => 'prefix',
                'value' => 'prefix.prefix_name'
            ],
            'fname',
            'lname',
            'person_birthday',
            //'category_id',
            //'position_id',
            //'levelposition_id',
            //'startworkdate',
            //'np_id',
            //'apn_id',
            //'degree_id',
            //'comment',
            //'comment2',
            //'comment3',

            ['class' => 'yii\grid\ActionColumn',    
                'header'=> 'ดูข้อมูล',
                'buttonOptions'=>['class'=>'btn btn-default'],
                'template' =>'<div class="btn-group btn-group-sm text-center" role="group">{view}</div>'
            ],
        ],
    ]); ?>
    <?php yii\widgets\Pjax::end() ?>
</div>
