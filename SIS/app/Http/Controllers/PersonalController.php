<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function showPersonalForm()
    {
        return view('personal');
    }
}