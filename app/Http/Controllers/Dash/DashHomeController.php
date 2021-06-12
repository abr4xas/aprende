<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class DashHomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = request()->user();

        $totalSubs = $user->subscriptions()->count();

        $show = $totalSubs >= 1 ? true : false;

        $subscriptions = $user->subscriptions()->withType(Course::class)->paginate();

        return view('dashboard', compact('show', 'subscriptions'));
    }
}
