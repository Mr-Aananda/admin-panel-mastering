<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [];

        // check user has permission to see last login history
        if (auth()->user()->can('last_login_history')) {
            $data['users'] = User::query()
                ->get();
        }


        return view('dashboard')
            ->with($data);
    }
}
