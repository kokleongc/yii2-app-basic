<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Country;

class CountryController extends Controller
{

    public function actionIndex()
    {
        $countries = Country::find()->all();

        return $this->asJson($countries);
    }

}
