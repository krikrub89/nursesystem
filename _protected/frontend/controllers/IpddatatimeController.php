<?php

namespace frontend\controllers;
use frontend\models\Ipddatatime;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class IpddatatimeController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM ipddatatime
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}