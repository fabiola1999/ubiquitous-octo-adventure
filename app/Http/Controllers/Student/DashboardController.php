<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'student']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $team = Auth::user()->referrals();
        $teamTable = [
            'list' => $team,
            'table' => [
                ['key' => 'User ID', 'value' => function ($item) { return $item->ref; }],
                ['key' => 'Name', 'value' => function ($item) { return $item->name(); }],
                ['key' => 'Phone Number', 'value' => function ($item) { return $item->phone; }],
                // ['key' => 'E-Mail Address', 'value' => function ($item) { return $item->email; }],
            ],
            'headBgColor' => 'green',
            'bodyBgColor' => 'light',
        ];
        return view('user.student.dashboard', compact('team', 'teamTable'));
    }
}
