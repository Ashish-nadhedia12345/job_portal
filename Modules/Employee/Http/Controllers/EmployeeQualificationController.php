<?php

namespace Modules\Employee\Http\Controllers;

use App\Models\EmployeeQualification;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $model = EmployeeQualification::all();
        return view('employee::qualification.index',['model'=>$model]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('employee::qualification.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'courses' => 'required',
            'institute_name' => 'required',
            'passing_year' => 'required',
            'percentage' => 'required', 
        ]);
        $user_id = Auth::user()->id;
        $qua = new EmployeeQualification();
        $qua->user_id = $user_id;
        $qua->courses = $validate['courses'];
        $qua->institute_name = $validate['institute_name'];
        $qua->passing_year = $validate['passing_year'];
        $qua->percentage = $validate['percentage'];
        $qua->save();
        return redirect()->route('employee.qualification.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('employee::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(EmployeeQualification $employeeQualification)
    {
        return view('employee::qualifaction.edit',['employeeQualification'=>$employeeQualification]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, EmployeeQualification $employeeQualification)
    {
        $validate = $request->validate([
            'courses' => 'required',
            'institute_name' => 'required',
            'passing_year' => 'required',
            'percentage' => 'required', 
        ]);
        $user_id = Auth::user()->id;
        $employeeQualification->user_id = $user_id;
        $employeeQualification->courses = $validate['courses'];
        $employeeQualification->institute_name = $validate['institute_name'];
        $employeeQualification->passing_year = $validate['passing_year'];
        $employeeQualification->percentage = $validate['percentage'];
        $employeeQualification->save();
        return redirect()->route('employee.qualification.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
