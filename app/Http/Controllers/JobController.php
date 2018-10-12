<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function home(Request $request){
        // $request->session()->put('id', 'iamsession');
        // if(!isset($_POST[session])){
        //     return redirect('');
        // }
        // if(!isset($_SESSION['emplogin'])){
        //     return redirect('/emp');
        // }
        $jobs = Job::all();
        return view('job',['jobs'=>$jobs]);
    }

    public function add(Request $request){
        
        $this->validate($request,[
            'title' => 'required'
        ]);

        $newJob = new Job;
        $newJob->title = $request->input('title');
        $newJob->description = $request->input('description');
        $newJob->location = $request->input('location');
        $newJob->vacancies_count = $request->input('vacancies_count');
        $newJob->experience = $request->input('experience');
        $newJob->salary = $request->input('salary');
        
        $newJob->save();
        
        return redirect('/job')->with('info','Job added successfully');
    }

    public function update($id){
        $jobs = Job::find($id);
        return view('updatejob',['jobs'=>$jobs]);
    }


    public function edit(Request $request,$id){

        $this->validate($request,[
            'title' => 'required'
        ]);
        
        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'vacancies_count' => $request->input('vacancies_count'),
            'experience' => $request->input('experience'),
            'salary' => $request->input('salary')
        );
        Job::where('id',$id)->update($data);
        
        
        return redirect('/job')->with('info','Job updated successfully');

    }

    public function delete($id){
        Job::where('id',$id)->delete();
        return redirect('/job')->with('info','Job deleted successfully');
    }
}
