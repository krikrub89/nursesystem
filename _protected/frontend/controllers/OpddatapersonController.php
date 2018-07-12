<?php

namespace frontend\controllers;
use frontend\models\Opddataperson;
use yii\db\Query;
use yii\helpers\Html;
use Yii;

class OpddatapersonController extends FrontendController {
public $enableCsrfValidation = false;

    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM opddataperson
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}