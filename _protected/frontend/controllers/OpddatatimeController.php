<?php

namespace frontend\controllers;
use frontend\models\Opddatatime;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class OpddatatimeController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM opddatatime
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}