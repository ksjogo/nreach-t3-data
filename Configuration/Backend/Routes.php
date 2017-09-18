<?php
use Nreach\T3Data\Controller\SingleController;

return [
    'entity' => [
        'path' => '/entity',
        'access' => 'public',
        'target' => SingleController::class . '::indexAction'
    ],
];
