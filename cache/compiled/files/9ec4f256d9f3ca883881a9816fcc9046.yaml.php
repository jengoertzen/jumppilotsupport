<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dustin.horrock/jumppilotsupport/user/config/plugins/email.yaml',
    'modified' => 1525800054,
    'data' => [
        'enabled' => true,
        'from' => 'jenniferg@iqmetrix.com',
        'from_name' => 'Jen',
        'to' => 'qkeast@gmail.com',
        'to_name' => 'Jen',
        'mailer' => [
            'engine' => 'sendmail',
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
