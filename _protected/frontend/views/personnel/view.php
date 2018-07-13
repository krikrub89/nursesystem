<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personnel */

$this->title = 'แสดงข้อมูล';
$this->params['breadcrumbs'][] = ['label' => 'Personnels', 'url' => ['index']];
$this->params['breadcrumbs'][] =  $model->fname.' '.$model->lname;
?>
<div class="personnel-view">



  <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?php print_r($model->fname.' '.$model->lname) ?></h3>
          <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">Label</span>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box box-primary">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'person_id',
            [
                'label'=>'คำนำหน้า',
                'attribute' => 'prefix.prefix_name',
               
            ],
            [
                'label'=>'ชื่อ',
                'attribute' => 'fname',
               
            ],
            [
                'label'=>'นามสกุล',
                'attribute' => 'lname',
                
            ],
            [
                'label'=>'วันเดือนปี เกิด',
               'attribute' => 'person_birthday',
              
            ],
            [
                'label'=>'ตำแหน่ง',
               'attribute' => 'category.category_name',
              
            ],
            [
                'label'=>'สายงาน',
               'attribute' => 'position.position_name',
              
            ],
            [
                'label'=>'ระดับ',
               'attribute' => 'levelposition.levelposition_name',
              
            ],
            [
                'label'=>'วันที่เริ่มงาน',
               'attribute' => 'startworkdate',
              
            ],
            [
                'label'=>'หลักสูตร NP',
               'attribute' => 'nplist.np_name',
              
            ],
            [
                'label'=>'หลักสูตร APN',
               'attribute' => 'apnlist.apn_name',
              
            ],
            [
                'label'=>'การศึกษา',
               'attribute' => 'degreelist.degree_name',
              
            ],
            [
                'label'=>'แผนก',
               'attribute' => 'department.dep_name',
              
            ],
            
            
          //  'comment2',
          //  'comment3',
        ],
    ]) ?>
        </div><!-- /.box-body -->
        <div class="box-footer">
       ปรับรุงเมื่อ .. <?php print_r($model->times_stamp)  ?>
        </div><!-- box-footer -->
      </div><!-- /.box -->

    

</div>
