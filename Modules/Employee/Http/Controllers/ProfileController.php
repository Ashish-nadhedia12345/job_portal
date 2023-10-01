<?php

namespace Modules\Employee\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('employee::profile.index',['profile'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Profile $profile)
    {
        $profile = Profile::where('user_id',auth()->user()->id)->first();
        if($profile){
            return redirect()->route('employee.profile.edit',['profile'=>$profile]);
        }else{
            return view('employee::profile.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
       
        $validate = $request->validate([
            'full_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'current_address' => 'required',
            'corespondes_address' => 'required',
            'phone_number' => 'required',
            'marital_status' => 'required',
            'dob' => 'required',
            'total_experience' => 'required',      
        ]);
        $user_id = Auth::user()->id;
        $pro = new Profile();
        $pro->user_id = $user_id;
        $pro->full_name = $validate['full_name'];
        $pro->father_name = $validate['father_name'];
        $pro->mother_name = $validate['mother_name'];
        $pro->current_address = $validate['current_address'];
        $pro->corespondes_address = $validate['corespondes_address'];
        $pro->phone_number = $validate['phone_number'];
        $pro->marital_status = $validate['marital_status'];
        $pro->dob = $validate['dob'];
        $pro->total_experience = $validate['total_experience'];
        $pro->save();
        return redirect()->route('employee.jobapply.index')->with('success', 'profile created');
    }

    public function edit(Profile $profile)
    {
        return view('employee::profile.edit',['profile'=>$profile]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Profile $profile)
    {
        $validate = $request->validate([
            'full_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'current_address' => 'required',
            'corespondes_address' => 'required',
            'phone_number' => 'required|numeric',
            'marital_status' => 'required',
            'dob' => 'required|date',
            'total_experience' => 'required',      
        ]);
        $user_id = Auth::user()->id;
        $profile->user_id = $user_id;
        $profile->full_name = $validate['full_name'];
        $profile->father_name = $validate['father_name'];
        $profile->mother_name = $validate['mother_name'];
        $profile->current_address = $validate['current_address'];
        $profile->corespondes_address = $validate['corespondes_address'];
        $profile->phone_number = $validate['phone_number'];
        $profile->marital_status = $validate['marital_status'];
        $profile->dob = $validate['dob'];
        $profile->total_experience = $validate['total_experience'];
        $profile->save();
        return redirect()->route('employee.jobapply.index')->with('success', 'profile created');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    
}
