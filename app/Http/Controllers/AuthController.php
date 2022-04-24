<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use JWTFactory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
	public function __construct() {
        $this->middleware('auth:api', ['except' => ['crearToken']]);
    }

    public function crearToken()
    {
		$response = [];
        $user = User::first();
        $token = JWTAuth::fromUser($user);
		
		$response = [
			'status' => true,
			'token'  => $token,
		];	

		return $response;
    }

}
