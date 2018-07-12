<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;


$this->title = 'Nurse Data&Report';


               
               $Ccat = array();
               foreach ($data as $value){
                   $Ccat[] = $value['cauti_years']+543;    
               }
               $data2 = array();
               foreach ($data as $value){
                   $data2[] = intval($value['cauti_data']);
                   
               }
               $Cdata = array_map('intval', $data2);
              
 echo Highcharts::widget([
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
       

  'title' => ['text' => 'อัตราการติดเชื้อทางเดินปัสสาวะ จากการคาสายสวนปัสสาวะ(CAUTI)'],
  'xAxis' => [
     'categories' => $Ccat
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
      
     ['name' => 'อัตราการติดเชื้อทางเดินปัสสาวะ จากการคาสายสวนปัสสาวะ(CAUTI)', 'data' => $Cdata],
     
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
                                <th><3 ต่อพันวันนอน</th>

                            </tr>
                        </thead>
                        <tbody>
     
                            <?php
                            $i = 1;
                            foreach ($data as $value) :
                                ?>
                                <tr>
                                    <td align="left"><?= $i++; ?></td>
                                    <td><?= Html::encode($value['cauti_years']+543); ?></td>
                                    <td align="left"> 
                          
                                    <a target="_blank" href="<?=
                                    
                                    Url::to(['administationerror/index','unit_occ' =>Html::encode($value['cauti_id'])]); ?>">
                                    <span class="label label-warning"><?= $value['cauti_data']; ?></span></a>
                                      
                                    </td>
 
                                </tr>
                            <?php endforeach; ?>
                         

                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>