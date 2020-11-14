<?php
declare(strict_types=1);

namespace App\Infrastructure\DAO;

use App\Infrastructure\DTO\UserDto;

class LoginDAO {

  /**
  * @param UserDto $userDto .
  *
  * @return string
  */
  public function login(UserDto $userDto): string {
    return 'DAO '. $userDto->getUsername(). ' pass: '. $userDto->getPassword();
  }
}