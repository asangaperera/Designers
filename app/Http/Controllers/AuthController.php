<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class AuthController extends Controller
{
  public function register(Request $request)
  {
    $request->validate([
      'name'=> 'required|string',
      'email'=>'required|string|unique:users',
      'password'=>'required|string|min:6'

    ]);
 
$user = new User([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=> Hash::make($request->password)
]);
    
  $user = new save();

   return response()->json(['message'=>'User has been registrede'], 200);
  
  }
  public function login(Request $request)

  {
      $request->validate([
          'email'=>'required',
          'password'=>'required|srting'

      ]);

      $credentials = request(['email','password']);

      if(!Auth::attempt($credentials)){
          return response()->json(['message'=>'Unauthorized'],401);
      }

      $user = $request->user();
      $tokenResult =$User->createToken('Personal Access Token');
      $token = $tokenResult->token;
      $token->expires_at = Carbon::now()->addWeeks(1);
      $token->save();

      return response()->json(['data'=>[
          'user'=>Auth::user(),
          'access_token'=> $tokenResult->accessToken,
          'access_type'=>'Bearer',
          'expires_at'=>Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()



      ]]);
    
    }
}
