<?php

namespace App\Http\Controllers;

use App\Models\Hamburger;
use Illuminate\Http\Request;
use App\Http\Requests\BurgerRequest;
use App\Http\Controllers\BurgerController;

class BurgerController extends Controller
{
    public function create(){     
        return view('burger.create');
    }

    public function store(BurgerRequest $request){

        $burger = Hamburger::create([

            'title'=> $request->title,
            'ingredienti'=> $request->ingredienti,
            // 'imgCibo'=> $request->file('imgCibo')->store('public/media'),
           
        ]);

         return redirect(route('homepage'))->with('burger.create', 'Hai inserito con successo il panino!');
    }

    public function index(){
        $burgers= Hamburger::all();
        // alla vista di index passa la collezione burgers compattata sotto forma di array
        return view('burger.index', compact('burgers'));
       }
}

