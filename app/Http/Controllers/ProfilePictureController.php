<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilePictureController extends Controller
{
    public function show($username)
    {
    	// This code is temporary, awaiting integration with oauth to blip
    	$path = public_path("images/".$username.".png");
    	if (File::exists($path)) {
            return File::get($path);
        }
        else {
        	return File::get(public_path("images/anon_vis.png"));
        }
    }
}
