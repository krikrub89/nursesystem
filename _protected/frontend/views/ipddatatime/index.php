<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use miloschuman\highcharts\Highcharts;

$this->title = 'Nurse Data&Report';

$fcat = array();
foreach ($data as $value){
$fcat[] = $value['ipd_years']+543;
}
//print_r($fcat);
$fdata = array();
$fdata2 = array();
foreach ($data as $value){
$fdata[] =$value['ipd_data']*1;
$fdata2[]=$value['ipd_data'];
}
//print_r($fdata);

?>
<?php 
echo Highcharts::widget([
   'options' => [
      'colors'=> ['#D2E71B'],  
      'title' => ['text' => 'จำนวนผู้ป่วยในทั้งหมด'],
      'xAxis' => [
         'categories' => $fcat
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
         ['name' => 'จำนวนผู้ป่วยในทั้งหมด', 'data' => $fdata]
         
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
                                <th>จำนวน </th>

                            </tr>
                        </thead>
                        <tbody>
     
                            <?php
                            $i = 1;
                            foreach ($data as $value) :
                                ?>
                                <tr>
                                    <td align="left"><?= $i++; ?></td>
                                    <td><?= Html::encode($value['ipd_years']+543); ?></td>
                                    <td align="left"> 
                          
                                    <a target="_blank" href="<?=
                                    
                                    Url::to(['administationerror/index','unit_occ' =>Html::encode($value['ipd_id'])]); ?>">
                                    <span class="label label-warning"><?= $value['ipd_data']; ?></span></a>
                                      
                                    </td>
 
                                </tr>
                            <?php endforeach; ?>
                         

                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>