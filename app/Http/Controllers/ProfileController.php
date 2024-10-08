<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getAllProfiles()
    {
        $profiles = Profile::all();
        return view("profiles", ['profiles' => $profiles]);
    }

    public function getProfile($id)
    {
        $profile = Profile::find($id);
        
        if (!$profile) {
            abort(404);
        }

        return view('profile', ['profile' => $profile]);
    }

}