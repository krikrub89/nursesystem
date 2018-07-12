<?php

namespace frontend\controllers;

class NursejobController extends FrontendController {
public $enableCsrfValidation = false;


    public function actionIndex()
    {
        return $this->render('index');
    }

}
