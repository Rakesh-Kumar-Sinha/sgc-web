<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['labs_list'] = DB::select('SELECT * FROM labs');
        $data['happenings_list'] = DB::select('SELECT * FROM happenings');
        return view('frontend.index',$data);
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
