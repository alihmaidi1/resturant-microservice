<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin extends Controller
{


    public function admin(Request $request){

        return auth("api")->user();


    }


}
