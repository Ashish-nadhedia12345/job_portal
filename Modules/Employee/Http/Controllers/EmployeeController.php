<?php

namespace Modules\Employee\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $applyJobs = JobApplication::all();
        return view('employee::jobs.index',['applyJobs' => $applyJobs]);
    }

    public function destroy(JobApplication $jobs)
    {
        $jobs->delete();
        return redirect()->route('employee.jobapply.index');
    }
}
