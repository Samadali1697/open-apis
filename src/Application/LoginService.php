<?php
declare(strict_types=1);

namespace App\Application;

use App\Infraustructure\Dto\UserDto;

class LoginService {

  /**
  * @param UserDto $userDto .
  *
  * @return string
  **/
  public function login(UserDto $userDto): string {
      return 'Hi '. $userDto->getUsername(). ' pass: '. $userDto->getPassword();
  }
}
