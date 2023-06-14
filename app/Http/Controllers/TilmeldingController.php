<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;
use App\Models\Network;

class TilmeldingController extends Controller
{
    public function index() {
        $networks = Network::all();
        
        return view('tilmelding', compact('networks'));
    }
}
