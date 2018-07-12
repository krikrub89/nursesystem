<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

 $this->title = $name;
?>
<section class="content">

  <div class="jumbotron">
      <h1><?=Html::img(Url::base().'/img/if_Minion_icon_174006.png')?><?= Html::encode( 'ผิดผลาด ไม่สามารถเข้าถึงได้') ?></h1>
      <p class="text-danger"><?= nl2br(Html::encode('คุณไม่มีสิทธิ์เข้าใช้งานส่วนนี้  กรุณาติดต่อผู้ดูแลระบบ ')) ?></p>
      
</div>

</section>
