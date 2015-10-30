<?php
namespace App\Http\Controllers\Auth;

use Auth;
use Input;
use App\User;
use Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('csrf');
        //$this->middleware('guest', ['except' => 'getLogout']);
        
    }

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

    public function cekexistuser(){

        $de_field=Input::get('field');
        $de_values=Input::get('values');
        
        //if(!empty($de_field) && !empty($de_values)){
            if(sizeof(User::where($de_field,'=',$de_values)->get()) > 0){
              return '{ "exist":true }';   
            } else {
                return '{ "exist":false }';   
            }
        //}else{
        //        return '{ "exist":false }';   
       // }
    }
}
