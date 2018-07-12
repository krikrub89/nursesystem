<?php

namespace frontend\controllers;

use frontend\models\Repeat;
use yii\db\Query;
use yii\helpers\Html;
use Yii;

class RepeatController extends FrontendController {
public $enableCsrfValidation = false;
     public function actionIndex()
    {
    $data =  Yii::$app->db->createCommand('SELECT
*
FROM
 
`repeat`

                                             ')
                               ->queryAll();
        return $this->render('index',[
             'data' => $data,
        ]);
    }

}
