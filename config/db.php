<?php

return [
    'class' => 'yii\db\Connection',

    // Use 127.0.0.1 or specify a port to prevent Yii 2 from treating the
    // database host as a Unix socket.
    'dsn' => 'mysql:host=localhost:3306;dbname=yii2basic',
    // 'dsn' => 'mysql:host=127.0.0.1;dbname=yii2basic',

    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
