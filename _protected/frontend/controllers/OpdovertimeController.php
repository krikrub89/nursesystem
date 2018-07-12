<?php

namespace frontend\controllers;
use frontend\models\Opdovertime;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class OpdovertimeController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM opdovertime
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}