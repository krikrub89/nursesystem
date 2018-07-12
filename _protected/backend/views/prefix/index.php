<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PrefixSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ข้อมูลคำนำหน้า');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prefix-index">
 <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title"><p>
         
    </p></h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
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

           // 'prefix_id',
            [
                'attribute' => 'prefix_id',
                'options'  => ['width' => '100'],    
                
            ],
            //'prefix_name',
            [
                'attribute' => 'prefix_name',
                'options'  => ['width' => '300'],    
                
            ],
           
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
     <?php yii\widgets\Pjax::end() ?>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
   
</div>
