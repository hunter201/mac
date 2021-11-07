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
        if ($request->search == null)
            return "Invalid search request";
        $s = $request->search;
        $count = DB::table('cars')
        ->where('name', 'LIKE', "%{$s}%")->count();
        return view('main', ['cars' => DB::table('cars')
            ->where('name', 'LIKE', "%{$s}%")
            ->orderBy('id')
            ->paginate(15), 'path' => $count]);
    }
}
