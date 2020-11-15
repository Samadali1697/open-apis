<?php
declare(strict_types=1);

namespace App\Domain;

use App\Infrastructure\DAO\LoginDAO;
use App\Infrastructure\DTO\UserDto;

class LoginService {
  /**
   * @var LoginDAO
   */
  private $dao;

  /**
   * @param LoginDAO $loginDAO .
   */
  public function __construct(
    LoginDAO $loginDAO
  ) {
    $this->dao = $loginDAO;
  }

  /**
  * @param UserDto $userDto .
  *
  * @return string
  */
  public function login(UserDto $userDto): string {
    return $this->dao->login($userDto);
  }
}
