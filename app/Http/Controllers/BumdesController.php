<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BumdesController extends Controller
{
    public function index()
    {
        return view('bumdes.index', [
            'bumdess'     => Bumdes::orderBy('id', 'DESC')->paginate(9)
        ]);
    }

    public function detail($slug)
    {
        $bumdes   = Bumdes::where('slug', $slug)->first();
        return view('Bumdes.detail', [
            'bumdes'  => $bumdes
        ]);
    }
}
