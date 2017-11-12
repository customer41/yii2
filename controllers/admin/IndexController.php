<?php

namespace app\controllers\admin;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionDefault()
    {
        return $this->render('default');
    }
}