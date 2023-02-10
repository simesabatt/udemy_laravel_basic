<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        // Eloquent(�G���N�A���g)
        $values = Test::all();
        $count = Test::count();
        $first = Test::findOrFail(1);
        $whereBBB = Test::where('text', '=', 'bbb')->get();

        // �N�G���r���_
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}