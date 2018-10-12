<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function validateAdmin(Request $request){
        $formUser = $request->input('uname');
        $formPass =  $request->input('pwd');
        $admin = Admin::all();
        for ($i=0;$i<count($admin);$i++){
            $dbEmail = $admin[$i]['email'];
            $dbPassword = $admin[$i]['password'];
            if($dbEmail == $formUser && $dbPassword == $formPass){
                // $value = "iamsession";
                // Session::set('emplogin', $value);
                return redirect('/createaccount');
            }
        }
        return redirect('/admin');
}
}