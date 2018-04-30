<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/jumppilotsupport/web/user/config/plugins/email.yaml',
    'modified' => 1525127621,
    'data' => [
        'enabled' => true,
        'from' => 'jenniferg@iqmetrix.com',
        'from_name' => 'Jen',
        'to' => 'jenniferg@iqmetrix.com',
        'to_name' => 'Jen',
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
