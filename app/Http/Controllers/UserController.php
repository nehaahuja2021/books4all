<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Validator;
class UserController extends Controller
{
    /* Register api 
    * 
    * @return \Illuminate\Http\Response 
    */ 
   public function register(Request $request) 
   { 
       
$input = $request->all(); 
       $input['password'] = bcrypt($input['password']); 
       $user = User::create($input); 
       $success['token'] =  $user->createToken('MyApp')-> accessToken; 
       $success['name'] =  $user->name;
     return response()->json(['success'=>$success]); 
   }
/*Login Api*/
   public function login(){ 
    if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
        $user = Auth::user(); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        return response()->json(['success' => $success]); 
    } 
    else{ 
        return response()->json(['error'=>'Unauthorised'], 401); 
    } 
   }

    /*Detail Api */

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user]); 
    } 




}
