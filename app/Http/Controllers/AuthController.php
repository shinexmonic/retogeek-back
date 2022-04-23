<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use App\Models\User;
use Illuminate\Http\Request;
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
        $user = User::first();

        $token = JWTAuth::fromUser($user);
        var_dump($token);exit();

    	try 
    	{
			$payload = JWTFactory::sub(123)->aud('foo')->foo(['bar' => 'baz'])->make();
			$token = JWTAuth::encode($payload);
            
			//var_dump($token);exit();
            //return  response()->json(compact('token'));

			return [
				'status' => true,
				'token'  => $token,
			];

    	} catch (Exception $e) {

    		return response()->json([
				'status' => false,
				'token'  => '',
			]);
    	}	
    }

}
