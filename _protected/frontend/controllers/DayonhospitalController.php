<?php

namespace frontend\controllers;
use frontend\models\Dayonhospital;
use yii\db\Query;
use yii\helpers\Html;
use Yii;




class DayonhospitalController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM dayonhospital
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}
