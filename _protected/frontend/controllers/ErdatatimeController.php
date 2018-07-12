<?php

namespace frontend\controllers;
use frontend\models\Erdatatime;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class ErdatatimeController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM erdatatime
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}