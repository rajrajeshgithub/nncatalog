<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    function index(Request $request){

        echo "admin";
    }

    public function login(Request $request)
    {

        if($request->isMethod('post')){
            $input = $request->all();
            //if(Auth::attempt(['email'=>$input['email'], 'password'=>$input['password'],'is_admin'=>1])){
            /*$validatedData = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);*/
            $validatedData = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];
            $messages = [
                'password.required'=>"The password field is required"
            ];
            $this->validate($request,$validatedData,$messages);
            if(Auth::guard('admin')->attempt(['email'=>$input['email'], 'password'=>$input['password']])){
                return redirect('admin/dashboard');
            } else {
                return redirect('admin')->with('flash_message_error',"Invalid username or password");
            }
        }
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Session::flush();
        return redirect('admin')->with('flash_message_success',"Logout Successfully");
    }
}
