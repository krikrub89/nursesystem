<?php

namespace frontend\controllers;
use frontend\models\Bedrate;
use yii\db\Query;
use yii\helpers\Html;
use Yii;

class BedrateController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM bedrate
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}