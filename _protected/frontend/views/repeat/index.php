<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;


$this->title = 'Nurse Data&Report';



$rdata = array();
 foreach ($data as $value){
extract($value);
$ryears =json_encode($value['repeat_years']+543);
$rdata[] = array($ryears,intval($value['repeat_data']*100));                
}

                echo Highcharts::widget([
                    'scripts' =>[
                        'highcharts-3d',
                        
                    ],// 3d
                    'options' => [
                        'chart' => [
                            'type' => 'pie',
                            'borderWidth' =>1,
                            'borderRadius' =>5,
                            'options3d' => [ //3d
                                'enabled' => true,
                                'alpha' => 50,
                                'beta' => 0,
                                
                                
                            ],

                        ],
                        'plotOptions' =>[
                            'pie'=> [
                                'depth' => 50, //3d
                            'showInLegend'=> TRUE,
                            'dataLabels' => [
                              //  'distance'=> -20,
                                  
                                'style' => [
                                    'fontWeight' => 'bold',
                                    'width' => '140px',
                                    
                                    
                                ],
                               'formatter' => new JsExpression('function(){return  Highcharts.numberFormat(this.y,0) + " %" }'),   
                            ]
                            
                           ]
                        ],
                        'title' => ['text' => 'อัตราการกลับเข้ารักษาซ้ำในโรงพยาบาลภายใน 28 วัน โดยไม่ได้วางแผน'],
                        //'subtitle' => ['text' => '(Pressure ulcer)'],
                        'credits' =>[
                            'enabled' => FALSE
                        ],
                        'legend' => [
                            'align' => 'right',
                            'verticalAlign' => 'middle',
                            'layout' => 'vertical',
                            'borderWidth' => 3,
                            'borderRadius' => 3,
                            
                            
                        ],
                       
                        'series' => [
                                [
                                'name' => 'อัตราการกลับเข้ารักษาซ้ำในโรงพยาบาลภายใน 28 วัน โดยไม่ได้วางแผน',
                                'data' =>  $rdata,
                             
                                    
                                ],
                             
                                
                               
                        ]
                    ]
                ]);
                
  
 
 echo"<br>";  
?>

    
     

 <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ปี พ.ศ.</th>
                                <th>ร้อยละ</th>

                            </tr>
                        </thead>
                        <tbody>
     
                            <?php
                            $i = 1;
                            foreach ($data as $value) :
                                ?>
                                <tr>
                                    <td align="left"><?= $i++; ?></td>
                                    <td><?= Html::encode($value['repeat_years']+543); ?></td>
                                    <td align="left"> 
                          
                                    <a target="_blank" href="<?=
                                    
                                    Url::to(['administationerror/index','unit_occ' =>Html::encode($value['repeat_id'])]); ?>">
                                    <span class="label label-warning"><?= $value['repeat_data']; ?></span></a>
                                      
                                    </td>
 
                                </tr>
                            <?php endforeach; ?>
                         

                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>