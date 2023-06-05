<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    //fonction qui permet d'afficher la page1
    public function affichepage1() {
        return view('page1');
    }

    //fonction qui permet d'afficher la page2
    public function affichepage2 () {
        return view('page2');
    }

    public function donnee () {
        $name = "Ahmed";
        $age="20";
        $names = ["Ahmed", "Ali", "Khalil"];
        return view('donnee.index')->with('name',$name)->with('age',$age)->with('names', $names);
    }
}
