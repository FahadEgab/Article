<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAccount;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class UserContrller extends Controller
{
    public function __construct(){

    }

    public function signIn(){
        if(session()->exists('Id')){
            return redirect()->route('Index');
        }
        return view('signIn');
    }

    public function signUp(){
        if(session()->exists('Id')){
            return redirect()->route('Index');
        }
        return view('signUp');
    }

    public function signInGo(Request $request){
        $user = User::where('email',$request -> email) -> first() ;
        $passs = $user -> password;
        $pass = $request -> password;
        if(Hash::check($pass,$passs)){
            session() ->put('Id' ,$user -> id);
            return redirect() -> route('Index');
        }
        return redirect()->back()->with('msg','هنالك خطأ يرجى المحاولة مجددا');

    }

    public function SignUpGo(UserAccount $request){

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back()->with('success','تم إنشاء الحساب');
    }

    public function signOut(){
        session()->forget('Id');
        return redirect() -> route('Index');
    }


}
