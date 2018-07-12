<?php

namespace frontend\controllers;
use frontend\models\Erdatanumber;
use yii\db\Query;
use yii\helpers\Html;
use Yii;

class ErdatanumberController extends FrontendController {
public $enableCsrfValidation = false;
    public function actionIndex()
     {
    $data =  Yii::$app->db->createCommand('SELECT  * 
                                           FROM erdatanumber
                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}
