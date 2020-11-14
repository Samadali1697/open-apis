<?php
declare(strict_type = 1);

namespace App\Config\DI;

use App\Application\LoginService;

class LoginModule {

    public function getDI(): array {
        return [
            LoginService::class => DI\create(LoginService::class)
        ];
    }
}

