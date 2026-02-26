<?php

namespace app\modules\api\v1\controllers;

use app\modules\api\v1\models\Country;
use yii\rest\ActiveController;

class CountryController extends ActiveController
{

    public $modelClass = Country::class;

}
