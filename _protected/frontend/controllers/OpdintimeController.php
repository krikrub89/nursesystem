<?php

namespace frontend\controllers;
use frontend\models\Opdintime;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class OpdintimeController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM opdintime
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}