<?php
declare(strict_types=1);

namespace App\Controller;

use DI\Container;

class LoginModule {
  /**
   * @param Container $container .
   * 
   * @return void
   */
  public function register(Container $container): void {
    $container->set(LoginService::class, \DI\create(LoginService::class));
    $container->set(DomainService::class, \DI\create(DomainService::class));
    $container->set(UserValidator::class, \DI\create(UserValidator::class));
    $container->set(LoginDAO::class, \DI\create(LoginDAO::class));
  }
}
