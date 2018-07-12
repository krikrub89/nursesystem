<?php

namespace backend\controllers;

use Yii;
use backend\models\Prefix;
use backend\models\PrefixSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PrefixController implements the CRUD actions for Prefix model.
 */
class PrefixController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Prefix models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PrefixSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Prefix model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
     public function getNextId(){
    //ตัวอย่างหากต้องการ SN59-00001

    
    $year = substr(date('Y') + 543, 2);//หาจากปีปัจจุบับคือ 59
    $lastRecord= Model::find()->where(['like', 'id_case', 'SN'.$year.'-'])->orderBy(['id' => SORT_DESC])->one();//หาตัวล่าสุดก่อน

    if ($lastRecord) {

        $digit = explode('-', $lastRecord->id_case);
            
        $lastDigit = ((int) $digit[1]);  // เปลี่ยน string เป็น integer สำหรับคำนวณ +1
        $lastDigit++; //เพิ่ม 1
        $lastDigit = str_pad($lastDigit, 5, '0', STR_PAD_LEFT);//ใส่ 0 ข้างหน้าหน่อย
    } else {
        $lastDigit = '00001';
    }

    return $case . $year . '-' . $lastDigit;

    }
    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Prefix model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Prefix();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prefix_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Prefix model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prefix_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Prefix model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Prefix model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Prefix the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Prefix::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
