<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use miloschuman\highcharts\Highcharts;

$this->title = 'Nurse Data&Report';

$vcat = array();
foreach ($data as $value){
$vcat[] = $value['vap_years']+543;
}
//print_r($fcat);
$vdata = array();
foreach ($data as $value){
$vdata[] = intval($value['vap_data']);

}
//print_r($vdata);

?>
<?php 
echo Highcharts::widget([
   'options' => [
      'colors'=> ['#7D2815'],  
      'title' => ['text' => 'อัตราการติดเชื้อที่ปอดจากการใช้เครื่องช่วยหายใจ(VAP)'],
      'xAxis' => [
         'categories' => $vcat
      ],
      'yAxis' => [
         'title' => ['text' => 'จำนวน']
      ],
      'plotOptions'=> [ 
      'series'=> [
                    'borderWidth'=> 0,
                    //'colorByPoint'=> true,
                    'dataLabels'=> [
                        'enabled'=> true
                    ]
                    ]
                    ], 
      'credits'=> [ 'enabled'=> false ], 
      'series' => [
         ['name' => 'อัตราการติดเชื้อที่ปอดจากการใช้เครื่องช่วยหายใจ(VAP)', 'data' => $vdata]
         
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
                                <th>จำนวน ครั้งต่อพันวันนอน</th>

                            </tr>
                        </thead>
                        <tbody>
     
                            <?php
                            $i = 1;
                            foreach ($data as $value) :
                                ?>
                                <tr>
                                    <td align="left"><?= $i++; ?></td>
                                    <td><?= Html::encode($value['vap_years']+543); ?></td>
                                    <td align="left"> 
                          
                                    <a target="_blank" href="<?=
                                    
                                    Url::to(['administationerror/index','unit_occ' =>Html::encode($value['vap_id'])]); ?>">
                                    <span class="label label-warning"><?= $value['vap_data']; ?></span></a>
                                      
                                    </td>
 
                                </tr>
                            <?php endforeach; ?>
                         

                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>