<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
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

        return view('dashboard', compact('show'));
    }
}
