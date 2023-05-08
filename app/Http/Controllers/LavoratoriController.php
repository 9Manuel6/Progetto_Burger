<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LavoratoriController extends Controller
{
    public function burger(){
        return view('chi-siamo');
    } 

    public function personale(){
        return view('contatti');
    } 


}
