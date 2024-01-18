<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;



class BasicController extends Controller
{
    public function welcome(): View
    {
        return view('welcome');
    }

    public function listing(): View
    {
        return view('listing');
    }

    public function listingTeam(): View
    {
        return view('listingTeam');
    }

    public function changepasswd(): View
    {
        return view('changepasswd');
    }

    public function changeTeamPwd(): View
    {
        return view('changeTeamPwd');
    }

    public function team(): View
    {
        return view('team');
    }

    public function jointeam(): View
    {
        return view('joinTeam');
    }

    public function passwd(): View
    {
        return view('passwd');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}
