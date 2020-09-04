<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\socialModel;

class loginController extends Controller
{
	public function logout(Request $req){

			$req -> session() -> flush();
			return redirect('/');

	}

    public function gitLogin(){
    	return Socialite::driver('github')->redirect();
   	}

    public function gitHubCallBack(Request $req){

    	$user = Socialite::driver('github')->stateless()->user();


    	$token = $user->token;
    	$id = $user->getId();
    	$name = $user->getName();
    	$nickName = $user->getNickname();
    	$email = $user->getEmail();
    	$avatar = $user->getAvatar();

    	//Session set 
    	$req -> session()-> put('token', $token);
    	$req -> session()-> put('name', $name);
    	$req -> session()-> put('nickName',$nickName);
    	$req -> session()-> put('email', $email);
    	$req -> session()-> put ('avatar', $avatar);

    	$exist= socialModel::where('nike_name', $nickName)->count();
    	    	
    	if ($exist == 0) {
    		
    		socialModel::insert([
    			'name'=>$name,
    			'email'=>$email,
    			'nike_name'=>$nickName,
    			'user_id' =>$id
    		]);

    		return redirect('/redirectProfile');

    	}else{

    		return redirect('/redirectProfile');
    	}

    }


    public function loginPage(Request $req){

    	if($req -> session() -> has('token')){

    		return redirect('/redirectProfile');

    	}else{

    		return view('login');
    	}
    }

}


