<?php
use Nreach\T3Data\Controller\SingleController;

return [
    // Login screen of the TYPO3 Backend
    'login' => [
                'path' => '/entity',
                'access' => 'public',
                'target' => SingleController::class . '::indexAction'
    ],
];
