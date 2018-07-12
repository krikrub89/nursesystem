<?php

namespace frontend\controllers;


use frontend\models\Vapdata;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class VapdataController extends FrontendController {
public $enableCsrfValidation = false;

    public function actionIndex()
    {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM vapdata
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}

