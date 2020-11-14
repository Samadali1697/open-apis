<?php
declare(strict_types=1);

namespace App\Domain;

use App\Infrastructure\DAO\LoginDAO;
use App\Infrastructure\DTO\UserDto;

class LoginService {
  /**
  * @param UserDto $userDto .
  *
  * @return string
  */
  public function login(UserDto $userDto): string {
    $dao = new LoginDAO();

    return $dao->login($userDto);
  }
}
