<?php
declare(strict_types=1);

namespace App\Application;

use App\Domain\LoginService AS DomainService;
use App\Infrastructure\DTO\UserDto;
use App\Infrastructure\Validators\UserValidator;

class LoginService {
  /**
   * @var DomainService
   */
  private $domainService;

  /**
   * @var UserValidator
   */
  private $validator;

  /**
   * @param DomainService $domainService .
   * @param UserValidator $validator     .
   */
  public function __construct(
    DomainService $domainService,
    UserValidator $validator
  ) {
    $this->domainService = $domainService;
    $this->validator = $validator;
  }

  /**
  * @param UserDto $userDto .
  *
  * @return string
  */
  public function login(UserDto $userDto): string {
    $userValidatorData = $this->validator->validate($userDto);
    if (!empty($userValidatorData)) {
      return 'Invalid input: ' . $userValidatorData;
    }

    return $this->domainService->login($userDto);
  }
}
