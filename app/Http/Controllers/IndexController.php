<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $website = General::query()->first();
        return view('home',['website'=> $website]);
    }

}
