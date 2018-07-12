<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>



<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="info-box">
                    <span class="info-box-icon bg-blue-active"><i class="fa fa-ambulance"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">จำนวนพยาบาล</span>
                        <span class="info-box-number">100
                           

                        </span>
                    </div><!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="info-box">
                    <span class="info-box-icon bg-green-gradient"><i class="fa fa-send-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ข้าราชการ</span>
                        <span class="info-box-number">100ราย
                            
                        </span>
                    </div><!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua-gradient"><i class="fa fa-reply"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ข้อมูล3</span>
                        <span class="info-box-number">
                           

                        </span>
                    </div><!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow-gradient"><i class="fa fa-reply-all"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ข้อมูล4</span>
                        <span class="info-box-number">
                           

                        </span>
                    </div><!-- /.info-box-content -->
                </div>
            </div>
        </div> 
<?php echo Highcharts::widget([
'scripts' => [
                'highcharts-3d',   
             ],
'options' => [
  'colors'=> ['#3498DB', '#17A589', '#28B463',
      '#CB4335', '#717D7E', '#FF9900', '#33CCCC',
      '#E6B0AA', '#6C3483', '#7D2815', '#FFCC00',
      '#993366', '#000080'],    
  'chart' => ['type' => 'column',
   // 'margin'=>75,
            'options3d'=> [
                 'enabled'=> true,
              'alpha'=> 10,
                'beta' =>7,
               'depth'=> 90
                ]
             ],
       

  'title' => ['text' => '10 อันดับ กระดูกและข้อ'],
  'xAxis' => [
     'categories' => ['Release', 'Debridement with repair tendon', 'TKA','Debridement','Arthrotomy'
         ,'CRIF with PFNA','CRIF with K-wire fixation','Remove plate with screw','ORIF with K-wire fixation',
         'Hemiarthroplasty with Bipolar']
  ],
  'yAxis' => [
     'title' => ['text' => 'ราย']
  ],
  'legend'=> [
            'enabled'=> true
             ],
  'plotOptions'=> [
                                'series'=> [
                                    'borderWidth'=> 0,
                                    'colorByPoint'=> true,
                                    'dataLabels'=> [
                                        'enabled'=> true
                                    ]
                                ]
                            ], 
  'credits'=> [ 'enabled'=> false ],  
  'series' => [
      
     ['name' => 'ประเภท', 'data' => [86,74, 60,58,42,36,34,32,24,23]],
     
  ]
]
]);
     echo"<br>";  
  ?>                
                
                
                

   
 <?php
  echo Highcharts::widget([
      
            'options' => [
                 'chart'=> [
            'type'=> 'pie',
               
                'options3d'=> [
                'enabled'=> true,
                'alpha'=> 45,
                'beta'=> 0,
                   
]            
        ],
                
      'colors'=> ['#18E41B', '#C8E418', '#BB8FCE',
      ],   
                'title' => ['text' => '3 อันดับผู้มารับบบริการผ่าตัดศัลยกรรมใบหน้าและขากรรไกร'],
                 'plotOptions' =>[
            'pie'=> [
                'allowPointSelect'=> true,
                'cursor'=> 'pointer',
                'depth'=> 35,
                'dataLabels'=> [
                    'enabled'=> true,
                    'format'=> '<b>{point.name}</b>: {point.percentage:.1f} %',
                    'style' =>[
                        'color'=>'#3300FF'                       
                    ]
                ]
            ]
        ],
           'credits'=> [ 'enabled'=> false ],      
                'series' => [
                    [
                        'plotBackgroundColor'=> null,
                        'plotBorderWidth'=> null,
                        'plotShadow'=> false,
                        'type' => 'pie',
                        'name' => 'จำนวน/ราย',
                         'data'=> [
            [ 'name' => 'ORIF with mini plate and screw', 'y'=> 9 ],
            [ 'name'=> 'Closed reduction nasal bone', 'y'=> 8 ],
            [ 'name'=> 'Remove mini plate and screw with tooth extrection', 'y'=> 2 ]
           
                    ]
                ]
            ]
            ]
        ]);
  
  
  
  ?>
        