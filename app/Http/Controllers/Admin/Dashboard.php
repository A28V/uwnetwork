<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Redirect;
class Dashboard extends \App\Http\Controllers\Controller
{
    

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login(Request $request)
    {    /* view login page and redirect  */
        if (Session::has('adminuserId')){ 
                 return redirect('admin/dashboard');
        }
        else{
                 return view('admin.adminlogin');
        }
    }
    
    public function loginUser(Request $request)
     {      
             

             $request->validate([
               'email'=>'required',
                'password'=>'required|min:5|max:12'
             ]);

             $adminuser = new AdminUser(); 
             //$adminuser->email=$request->email;
             //$adminuser->password=$request->password;
             $user = $adminuser->where('email','=',$request->email)->first(); 
             if($user){  //echo $request->password; echo "<br>"; echo $user->password; die;
                 if(Hash::check($request->password,$user->password)){
                       $request->session()->put('adminuserId',$user->id);
                        return redirect('/admin/dashboard');
                 }else{ 
                    return back()->with('fail','password does not match');
                 }

             }
             else{
                return back()->with('fail','This email is not registered');
             }
     }
}