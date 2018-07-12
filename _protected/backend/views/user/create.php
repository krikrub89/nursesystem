<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role */

$this->title = Yii::t('app', 'เพิ่มผู้ใช้');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ผู้ใช้ทั้งหมด'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

<!--   <h1><?= Html::encode($this->title) ?></h1> -->
    <div class="row">
    <div class="col-lg-7 ">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">เพิ่มผู้ใช้ใหม่</h3>

      </div><!-- /.box-header -->
      <div class="box-body">
       <?= $this->render('_form', [
        'user' => $user,
        'role' => $role,
    ]) ?>
      </div><!-- /.box-body -->
      <div class="box-footer">
       !  เพิ่มผู่ใช้ในระบบ
      </div><!-- box-footer -->
    </div><!-- /.box -->        
        
    </div> 

    </div>

</div>

