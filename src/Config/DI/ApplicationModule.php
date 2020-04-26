<?php
// config.php
use App\Application\LoginService;
use App\Controller\LoginController;

return [
    // ...
    LoginController::class => DI\create()
        ->constructor(DI\get(LoginService::class)),
];
