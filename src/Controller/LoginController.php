<?php
declare(strict_types=1);

namespace App\Controller;

use App\Application\LoginService;
use App\Infraustructure\Dto\UserDto;
use App\Infraustructure\Validators\UserValidator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginController {
  private const USER_NAME = 'username';
  private const PASSWORD = 'password';

  private $loginService = null;

  public function __construct()
  {

  }

  /**
  * @param Request $request .
  * @return Response
  **/
  public function login(Request $request): Response
  {
    //$name = $request->query->get('name');
    $username = json_decode($request->getContent(), true)[self::USER_NAME];
    $password = json_decode($request->getContent(), true)[self::PASSWORD];

    $userValidator = new UserValidator();
    $loginService = new LoginService($userValidator);
    $response = $loginService->login(new UserDto($username, $password));

    return new Response($response);
  }
}
