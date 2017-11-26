<?php



#$_fn=realpath(__DIR__."/../data")."/data.db";

return [
    'components' => [
        'db' => [
	    'class' => 'yii\db\Connection',
    	    #'dsn' => 'sqlite:'.$_fn,

            'dsn' => 'mysql:host=localhost;dbname=gym190',
            'username' => 'gym190',
            'password' => 'gym190',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
