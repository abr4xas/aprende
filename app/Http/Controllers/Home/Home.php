<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Traits\ScopeByCategory;
use Illuminate\Http\Request;

class Home extends Controller
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
            ->paginate(6);

        return view('home', compact('courses'));
    }
}
