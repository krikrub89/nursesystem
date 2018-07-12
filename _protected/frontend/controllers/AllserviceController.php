<?php

namespace frontend\controllers;
use frontend\models\Allservice;
use yii\db\Query;
use yii\helpers\Html;
use Yii;

class AllserviceController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM allservice
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}