<?php
declare(strict_types=1);

namespace App\Controller;

use App\Application\LoginService;
use App\Infrastructure\DTO\UserDto;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Infrastructure\Validators\UserValidator;
use Symfony\Component\Config\Definition\Exception\Exception;

class LoginController {
  private const USER_NAME = 'username';
  private const PASSWORD = 'password';

  /**
   * @var LoginService
   */
  private $loginService;

  /**
   * @var UserValidator
   */
  private $userValidator;

  /**
   * @param LoginService  $loginService  .
   * @param UserValidator $userValidator .
   */
  public function __construct(
    LoginService $loginService,
    UserValidator $userValidator
  ) {
    $this->loginService = $loginService;
    $this->userValidator = $userValidator;
  }

  /**
  * @param Request $request .
  * @return Response
  **/
  public function login(Request $request): Response
  {
    try {
       //$name = $request->query->get('name');
      $username = json_decode($request->getContent(), true)[self::USER_NAME];
      $password = json_decode($request->getContent(), true)[self::PASSWORD];

      $response = $this->loginService->login(new UserDto($username, $password));

      return new Response($response);
    }
    catch (Exception $e) {
      echo $e;
    }
  }
}
