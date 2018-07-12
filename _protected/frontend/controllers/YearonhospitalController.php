<?php

namespace frontend\controllers;
use frontend\models\Yearonhospital;
use yii\db\Query;
use yii\helpers\Html;
use Yii;



class YearonhospitalController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM yearonhospital
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}