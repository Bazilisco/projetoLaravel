<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePoemasRequest;
use App\Models\Poema;
use Illuminate\Support\Facades\Auth;

class PoemaController extends Controller
{
    //

    public function index () {

        return view('welcome');

    }

    public function create (Request $request) {

        return view('create');

    }

    public function store (StorePoemasRequest $request) {

        $poema = new Poema;
        $poema->titulo = $request->post('titulo');
        $poema->poesia = $request->post('poesia');
        $poema->user_id = Auth::user()->id;
        $poema->save();

        $user_id = Auth::user()->id;

        $lista = Poema::where('user_id', $user_id)->get();

        return view('store', ['store'=>$lista]);
    }

    public function dashboard () {

        return view('dashboard');
    }
}
