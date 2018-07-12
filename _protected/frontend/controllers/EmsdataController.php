<?php

namespace frontend\controllers;
use frontend\models\Emsdata;
use yii\db\Query;
use yii\helpers\Html;
use Yii;



class EmsdataController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM emsdata
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}