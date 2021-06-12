<?php

namespace App\Http\Controllers\Front;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class CourseShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Course $course)
    {

		if ($request->has('subscribe')) {
			return $this->toggleSubscription($course);
		}

		$showCta = request()->user();

        return view('pages.courses.show', compact('course', 'showCta'));
    }

	/**
	 * toggleSubscription
	 *
	 * @param \Illuminate\Database\Eloquent\Model $model
     * @return \Illuminate\Http\Response
	 */
	public function toggleSubscription(Model $model)
	{
        $user = request()->user();
		$user->toggleSubscribe($model);
		return redirect()->route('dashboard');
	}
}
