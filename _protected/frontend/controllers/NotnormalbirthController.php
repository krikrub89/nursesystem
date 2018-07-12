<?php

namespace frontend\controllers;
use frontend\models\Notnormalbirth;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class NotnormalbirthController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM notnormalbirth
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}