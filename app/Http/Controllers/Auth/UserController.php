<?php
namespace App\Http\Controllers\Auth;

use Auth;
use Input;
use App\User;
use Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	/*public function Login(){
        $inputs=["email"=> Input::get("email"),
                "password" => Input::get("password")];
        if(Auth::attempt($inputs)){
            return 'pass';
        }else{
            return 'fail';
        }
    }
     
    public Function Logout(){
        Auth::logout();
        return 'logged out';
    }*/
    public function Login(){
        if(Auth::attempt(Input::only('email','password'))){
            return Auth::check() ? '{ "status" :true }' : '{ "status" : false }';
        }else{
            return '{ "status" : false }';
        }
    }
     
    public Function Logout(){
        Auth::logout();
        return 'logged out';
    }
}
