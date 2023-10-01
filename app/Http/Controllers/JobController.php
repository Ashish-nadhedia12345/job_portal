<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobCategory;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(Request $request){
       $jobCategoryID = $request->input('job_category_id');
       $term = $request->input('term');
       
        $query = Jobs::select('*');

        if($jobCategoryID){
          $query->where('job_category_id',$jobCategoryID);
         }
         if($term !=''){
            $query->where('job_title','like',"%".$term."%");
         }
        
        $jobs = $query->paginate(10);
        return view('job.index',['jobs'=> $jobs]);
    }


    public function joblist( JobCategory $jobCategory){
        
        $jobs = Jobs::where('job_category_id',$jobCategory->id)->paginate(10);
        return view('job.index',['jobs'=> $jobs , 'jobCategory' => $jobCategory]);
    }
    public function jobDetail(Jobs $jobs){
        if(Auth::user()){
            $jobdetail = Jobs::where('id',$jobs->id)->get();
            return view('job.detail',['jobdetail'=> $jobdetail , 'jobs'=>$jobs]);
        }else{
            return redirect('login');
        }    
    }
    public function applyNow( Request $request ,Jobs $jobs){

        JobApplication::create([
              'user_id'=> auth()->user()->id,
              'jobs_id' => $jobs->id
        ]);
        return redirect()->route('job.index',['jobs'=>$jobs]);
    }
  
}
