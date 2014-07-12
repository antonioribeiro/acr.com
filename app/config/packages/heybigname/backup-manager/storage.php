<?php

return [
    'local' => [
        'type' => 'Local',
        'root' => getenv('BACKUP.PATH') . '/' . getenv('DOMAIN'),
    ],
];
