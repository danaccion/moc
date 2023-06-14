<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model;

class ViewProfileController extends Controller
{
    public function index() {
        return view('view-profile');
    }
}
