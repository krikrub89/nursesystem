<?php

namespace frontend\controllers;
use frontend\models\Admitpercentday;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class AdmitpercentdayController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM admitpercentday
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}