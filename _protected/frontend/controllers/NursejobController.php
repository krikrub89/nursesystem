<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Personnel;
use app\models\PersonnelSearch;
use app\models\Department;
use yii\db\Query;

class NursejobController extends FrontendController {
public $enableCsrfValidation = false;


    public function actionIndex()
    {
        
         $query = new Query();
        $data = $query->select(['department.dep_name','count'=>'Count(*)'])
                ->from('personnel')
                ->leftJoin('department', ' personnel.dep_id = department.dep_id')
                ->where(['personnel.position_id'=>'01'])
                ->groupBy('personnel.dep_id')
                
                ->all();
        return $this->render('index',[
                  'data' => $data,
        ]);
    }

}
