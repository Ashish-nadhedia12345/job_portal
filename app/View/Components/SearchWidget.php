<?php

namespace App\View\Components;

use App\Models\JobCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchWidget extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $jobCategory = JobCategory::all();
        return view('components.search-widget',['jobCategory' => $jobCategory]);
    }
}
