<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\db\Query;
use rmrevin\yii\fontawesome\FA;

rmrevin\yii\fontawesome\AssetBundle::register($this);
?>
<?php   
 $subone =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubone
                                              
                                              ORDER BY menusubone_id ASC')
                               ->queryAll();
  $subtwo =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubtwo
                                              
                                              ORDER BY menusubtwo_id ASC')
                               ->queryAll();
  $subthree =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubthree
                                              
                                              ORDER BY menusubthree_id ASC')
                               ->queryAll();
  $subfour =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubfour
                                              
                                              ORDER BY menusubfour_id ASC')
                               ->queryAll();
  $subfive =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubfive
                                              
                                              ORDER BY menusubfive_id ASC')
                               ->queryAll();
  $subsix =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubsix
                                              
                                              ORDER BY menusubsix_id ASC')
                               ->queryAll();
  $subseven =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubseven
                                              
                                              ORDER BY menusubseven_id ASC')
                               ->queryAll();
  $subeight =  Yii::$app->db->createCommand('SELECT *
                                              FROM menusubeight
                                              
                                              ORDER BY menusubeight_id ASC')
                               ->queryAll();
$menusubone = [];
foreach ($subone as $value) {
    $menusubone[] =[
        'label' => $value['menusubone_name'], 
        'url' => [''.$value['menusubone_link'].''], 
        'icon'=>$value['menusubone_icon'], 
    ];              
}
$menusubtwo = [];
foreach ($subtwo as $value) {
    $menusubtwo[] =[
        'label' => $value['menusubtwo_name'], 
        'url' => [''.$value['menusubtwo_link'].''], 
        'icon'=>$value['menusubtwo_icon'], 
    ];              
}
$menusubthree = [];
foreach ($subthree as $value) {
    $menusubthree[] =[
        'label' => $value['menusubthree_name'], 
        'url' => [''.$value['menusubthree_link'].''], 
        'icon'=>$value['menusubthree_icon'], 
    ];              
}
$menusubfour = [];
foreach ($subfour as $value) {
    $menusubfour[] =[
        'label' => $value['menusubfour_name'], 
        'url' => [''.$value['menusubfour_link'].''], 
        'icon'=>$value['menusubfour_icon'],
    ];              
}
$menusubfive = [];
foreach ($subfive as $value) {
    $menusubfive[] =[
        'label' => $value['menusubfive_name'], 
        'url' => [''.$value['menusubfive_link'].''], 
        'icon'=>$value['menusubfive_icon'],
    ];              
}
$menusubsix = [];
foreach ($subsix as $value) {
    $menusubsix[] =[
        'label' => $value['menusubsix_name'], 
        'url' => [''.$value['menusubsix_link'].''], 
        'icon'=>$value['menusubsix_icon'],
    ];              
}
$menusubseven = [];
foreach ($subseven as $value) {
    $menusubseven[] =[
        'label' => $value['menusubseven_name'], 
        'url' => [''.$value['menusubseven_link'].''], 
        'icon'=>$value['menusubseven_icon'],
    ];              
}
$menusubeight = [];
foreach ($subeight as $value) {
    $menusubeight[] =[
        'label' => $value['menusubeight_name'], 
        'url' => [''.$value['menusubeight_link'].''], 
        'icon'=>$value['menusubeight_icon'],
    ];              
}
?>
<aside class="main-sidebar">

    <section class="sidebar">


      
        <div  class="sidebar-form" style="border-style: hidden" align="center">
         <div  class="box box-success" style="width:205px;text-align:left;"  >
       <?= dmstr\widgets\Menu::widget(
             
            [
              'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],  
                
               'items' => [ 
                
                 ['label' => 'ฐานข้อมูลทั่วไป', 
                     'options' => ['class' => 'header'],
                    ],                 
                 [
                                'label' => 'ข้อมูลพื้นฐาน',
                                'icon' => 'fa fa-file-text-o',
                                'url' => '#',
                              
                                'items' => [
                                    [
                                        'label' => 'ข้อมูลโรงพยาบาล',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => $menusubone 
                                        
                                     
                                        
                                    ],
                                    [
                                        'label' => 'ข้อมูลสถิติผู้ใช้บริการ',
                                        'icon' => 'fa fa-hospital-o',
                                        'url' => '#',
                                        'items' => $menusubtwo
                                    ],
                                ],
                            ],  
                 ////////////////////////////////////////////////////////////////////////   
                 [
                                'label' => 'ข้อมูลองค์กรพยาบาล',
                                'icon' => 'circle-o',
                                'url' => '#',
                                 'items' => [
                                    [
                                        'label' => 'ข้อมูลพื้นฐาน',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => $menusubthree
                                    ],
                                    [
                                        'label' => 'ข้อมูลความพึงพอใจ',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => $menusubfour
                                    ],
                                ],
                            ],  
             //////////////////////////////////////////////////////////////      
                   
                   
           ], 
         ]    
        ) ?>      
            
            
         </div>    
        </div>
        
       <div  class="sidebar-form" style="border-style: hidden" align="center">
       <div  class="box box-warning" style="width:205px;text-align:left;"  >
       <?= dmstr\widgets\Menu::widget(
             
            [
              'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],  
                
               'items' => [ 
                
                 ['label' => 'ฐานข้อมูลบุคลากรทางการพยาบาล', 
                     'options' => ['class' => 'header'],
                    ],                 
                ['label' => 'ข้อมูลกำลังคน', 'icon' => 'fa fa-users', 'url' => '#',
                    'items'=> $menusubfive
                    ], 
                 ['label' => 'ข้อมูลรายบุคคล', 'icon' => 'fa fa-female', 'url' => 'personnel/'], 
               
                   
             //////////////////////////////////////////////////////////////      
                   
                   
           ], 
         ]    
        ) ?>      
            
            
         </div>    
        </div>
        
          <div  class="sidebar-form" style="border-style: hidden" align="center">
       <div  class="box box-danger" style="width:205px;text-align:left;"  >
       <?= dmstr\widgets\Menu::widget(
             
            [
              'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],  
                
               'items' => [ 
                
                 ['label' => 'ฐานข้อมูลคุณภาพทางการพยาบาล', 
                     'options' => ['class' => 'header'],
                    ],                 
                 [
                                'label' => 'ข้อมูลตัวชี้วัดสำคัญ',
                                'icon' => 'fa fa-newspaper-o',
                                'url' => '#',
                                'items' => $menusubseven
               ],
                 ////////////////////////////////////////////////////////////////////////   
                 [
                                'label' => 'ข้อมูลตัวชี้วัดในหน่วยงาน',
                                'icon' => 'circle-o',
                                'url' => '#',
                                 'items' =>  $menusubeight
             //////////////////////////////////////////////////////////////      
                   
                   
           ],
            ],
         ]   
        ) ?>      
            
            
         </div>    
        </div>
        
        <div  class="sidebar-form" style="border-style: hidden" align="center">
         <div  class="box box-info" style="width:205px;text-align:left;"  >
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                     
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                   
                    
                    
      
             ],   
            ]
        ) ?>
         </div></div>
    </section>

</aside>
