<?php

namespace app\modules\api;

class Module extends \yii\base\Module
{

    public function init()
    {
        parent::init();

        $this->modules = [
            'v1' => [
                'class' => 'app\modules\api\v1\Module',
            ],
        ];
    }

}
