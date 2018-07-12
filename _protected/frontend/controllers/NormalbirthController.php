<?php

namespace frontend\controllers;
use frontend\models\Normalbirth;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class NormalbirthController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM normalbirth
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}