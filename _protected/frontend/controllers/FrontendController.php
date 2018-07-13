<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;

/**
 * FrontendController extends Controller and implements the behaviors() method
 * where you can specify the access control ( AC filter + RBAC) for
 * your controllers and their actions.
 */
class FrontendController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     * Here we use RBAC in combination with AccessControl filter.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'controllers' => ['article'],
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'admin'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'controllers' => ['article'],
                        'actions' => ['create', 'update', 'admin'],
                        'allow' => true,
                        'roles' => ['editor'],
                    ],
                    [
                        'controllers' => ['article'],
                        'actions' => ['index', 'view'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['layouts'],
                        'actions' => ['index', 'view'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['opddataperson'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['opddatatime'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['opdintime'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['opdovertime'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['emsdata'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['erdatatime'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['erdatanumber'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['ipddatatime'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['admitpercentday'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['dayonhospital'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['yearonhospital'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['bedrate'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['normalbirth'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['notnormalbirth'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['allservice'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['falling'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['vapdata'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['pressure'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['catui'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['repeat'],
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                       'controllers' => ['personnel',],
                        'actions' => ['index','view'],
                        'allow' => true,
                        'roles' => ['member','admin',],
                    ],
                    [
                       'controllers' => ['nursejob'],
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['member','admin'],
                    ],



                ], // rules

            ], // access

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ], // verbs

        ]; // return

    } // behaviors

} // AppController
