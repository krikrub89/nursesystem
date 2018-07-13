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
  

      <div class="col-md-12">
            <div class="box box-solid box-info">
              <div class="box-header">
                  <h3 class="box-title"></h3>
               ข้อมูลบุคลากรทางการพยาบาล
              </div><!-- /.box-header -->
              <div class="box-body">
                <?php yii\widgets\Pjax::begin(['id' => 'grid-user-pjax','timeout'=>5000]) ?>
                <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    
                 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'person_id',
            
            [
                'label'=>'คำนำหน้า',
                'attribute' => 'prefix',
                'value' => 'prefix.prefix_name'
            ],
            [
                'label'=>'ชื่อ',
                'attribute' => 'fname',
                'value' => 'fname'
            ],
            [
                'label'=>'นามสกุล',
                'attribute' => 'lname',
                'value' => 'lname'
            ],
            [
                'label'=>'วันเดือนปี เกิด',
                'attribute' => 'person_birthday',
                'value' => 'person_birthday'
            ],
            
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
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>

  
    <?php yii\widgets\Pjax::end() ?>
</div>
