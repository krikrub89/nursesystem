<?php

namespace frontend\controllers;

use frontend\models\Catui;
use yii\db\Query;
use yii\helpers\Html;
use Yii;


class CautiController extends \yii\web\Controller
{
    public function actionIndex()
    {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM cauti
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}
