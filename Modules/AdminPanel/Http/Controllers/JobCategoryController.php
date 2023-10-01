<?php

namespace Modules\AdminPanel\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $category = JobCategory::paginate(5);
        return view('adminpanel::category.index',['category'=> $category]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('adminpanel::category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,svg',
        ]);
        $imageName = uniqid() . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $cat = new JobCategory();
        $cat->title = $validate['title'];
        $cat->description = $validate['description'];
        $cat->image = $imageName;
        $cat->save();
        return redirect()->route('admin.jobcategory.index')->with('success', 'category created');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('adminpanel::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(JobCategory $jobCategory)
    {
        return view('adminpanel::category.edit',['jobCategory' => $jobCategory]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, JobCategory $jobCategory)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,svg',
        ]);
        $imageName = uniqid() . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $jobCategory->title = $validate['title'];
        $jobCategory->description = $validate['description'];
        $jobCategory->image = $imageName;
        $jobCategory->save();
        return redirect()->route('admin.jobcategory.index')->with('success', 'category created');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(JobCategory $jobCategory)
    {
        $jobCategory->delete();
        return redirect()->route('admin.jobcategory.index')->with('danger', 'category deleted');
    }
}
