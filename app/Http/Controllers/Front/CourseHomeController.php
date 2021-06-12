<?php

namespace App\Http\Controllers\Front;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Traits\ScopeByCategory;
use App\Http\Controllers\Controller;

class CourseHomeController extends Controller
{

    use ScopeByCategory;
    protected $courses;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Course $courses)
    {
        $this->courses = $courses;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $courses = $this->courses::withScopes($this->scopes())
            ->latest('created_at')
            ->paginate(9);

        return view('pages.courses.index', compact('courses'));
    }
}
