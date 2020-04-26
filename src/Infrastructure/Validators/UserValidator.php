<?php
declare(strict_types=1);

namespace App\Infrastructure\Validators;

use App\Infrastructure\Dto\UserDto;

class UserValidator {

  /**
  * @param UserDto $userDto .
  *
  * @return String|null
  **/
  public function validate(UserDto $userDto): ?String {
      if ($userDto === null) {
          return 'No form data';
      }

      if (empty($userDto->getUsername()) && empty($userDto->getPassword())) {
          return 'Username and Password.';
      }

      if (empty($userDto->getUsername())) {
          return 'Username.';
      }

      if (empty($userDto->getPassword())) {
          return 'Password.';
      }

      return null;
  }
}
