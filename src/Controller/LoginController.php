<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class LoginController {
  public function login(Request $request)
  {
    //$name = $request->query->get('name');
    $name = json_decode($request->getContent(), true);
    return new Response('Hi '. $name['name']);
  }
}
