<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;

class EmployerController extends Controller
{
    public function validateEmployer(Request $request){
        $formUserName = $request->input('uname');
        $formPassword =  $request->input('pwd');
        $employers = Employer::all();
        // dump($employers);die;
        for ($i=0;$i<count($employers);$i++){
            $dbEmail = $employers[$i]['email'];
            $dbPassword = $employers[$i]['password'];
            if($dbEmail == $formUserName && $dbPassword == $formPassword){
                // $value = "iamsession";
                // Session::set('emplogin', $value);
                return redirect('/job');
            }
        }
        return redirect('/emp');
        
        // return view('adminlogin',['employers'=>$employers]);

    }
    public function employerList(){
        $employers = Employer::all();
        // dump($employers);die;
        return view('adminlogin',['employers'=>$employers]);
    }

    public function add(Request $request){
        
        $this->validate($request,[
            'name' => 'required'
        ]);

        $newEmp = new Employer;
        $newEmp->name = $request->input('name');
        $newEmp->email = $request->input('email');
        $newEmp->password = $request->input('password');
        $newEmp->industry = $request->input('industry');
        
        $newEmp->save();
        
        return redirect('/adminlogin')->with('info','Employer added successfully');
    }




}
