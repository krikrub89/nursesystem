<?php

namespace frontend\controllers;




use frontend\models\Pressure;
use yii\db\Query;
use yii\helpers\Html;
use Yii;

class PressureController extends FrontendController {
public $enableCsrfValidation = false;
     public function actionIndex()
    {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM pressure
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}
