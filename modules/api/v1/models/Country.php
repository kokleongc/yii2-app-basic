<?php

namespace app\modules\api\v1\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{

    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],
            ['code', 'string', 'length' => 2],
            ['name', 'string', 'min' => 3],
            ['population', 'number', 'integerOnly' => true, 'min' => 1],
        ];
    }

}
