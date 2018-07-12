<?php

namespace frontend\controllers;

use frontend\models\Falling;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class FallingController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
    {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM falling
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}
