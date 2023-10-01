<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $model = JobCategory::paginate(8);
        return redirect()->route('category.index', ['model' => $model]);
    }
}
