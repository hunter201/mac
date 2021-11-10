<?php

namespace App\Http\Controllers;
      
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->fullUrl();
        return view('main');
    }

    public function search(Request $request)
    {
       
        $count = '';
        return view('main', ['cars' => DB::table('cars')
            ->where('name', 'LIKE', "%Ltd%")
            ->get(), 'count'=>$count]);
    }
}
