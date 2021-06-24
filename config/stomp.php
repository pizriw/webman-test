<?php
return [
    'default' => [
        'host'    => 'stomp://rabbitmq:61613',
        'options' => [
            'vhost'    => '/',
            'login'    => 'myuser',
            'passcode' => 'mypass',
            'debug'    => true,
        ]
    ]
];
