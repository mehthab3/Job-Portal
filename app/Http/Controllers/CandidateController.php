<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Job;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
   
    public function validateCand(Request $request){
        $formUser = $request->input('user');
        $formPass =  $request->input('pass');
        $candidates = Candidate::all();
        // dump($employers);die;
        for ($i=0;$i<count($candidates);$i++){
            $dbEmail = $candidates[$i]['email'];
            $dbPassword = $candidates[$i]['password'];
            if($dbEmail == $formUser && $dbPassword == $formPass){
                // $value = "iamsession";
                // Session::set('emplogin', $value);
                return redirect('/viewjob');
            }
        }
        return redirect('/cand');
        
        // return view('adminlogin',['employers'=>$employers]);

    }

   
    public function search(Request $request){
        $searchKeyword = $request['searchbox'];
        $jobs = DB::table('jobs')
                     ->select(DB::raw('title,description,location,vacancies_count,experience,salary'))
                     ->where('title', 'LIKE', '%'.$searchKeyword.'%')
                     ->orWhere('location', 'LIKE', '%'.$searchKeyword.'%')
                     ->orWhere('salary', 'LIKE', '%'.$searchKeyword.'%')
                     ->get();
                    //  dump($jobs[0]);die;
                    //  for($i=0;$i<count($jobs);$i++)
                     return view('searchresults',['jobs'=>$jobs]);
    }

    public function candidateList(){
        $candidates = Candidate::all();
        return view('candidatelist',['candidates'=>$candidates]);
    }

    public function add(Request $request){
        
    $this->validate($request,[
        'name' => 'required'
    ]);

    $newCand = new Candidate;
    $newCand->name = $request->input('name');
    $newCand->email = $request->input('email');
    $newCand->password = $request->input('password');
    $newCand->location = $request->input('location');
    // $newCand->company_name = $request->input('company_name');
    $newCand->experience = $request->input('experience');
    $newCand->skills = $request->input('skills');
    // $newCand->profile = $request->input('profile');
    $newCand->education = $request->input('education');

    
    $newCand->save();
    
    return redirect('/candidatelist')->with('info','Candidate added successfully');
}

public function viewJob(){

    $jobs = Job::all();
        return view('viewjob',['jobs'=>$jobs]);
}


}