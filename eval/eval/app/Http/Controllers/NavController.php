<?php

namespace App\Http\Controllers;
use App\Models\Personnage;
use App\Models\Dessinateur;


use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function list()
    {
        $personnages = Personnage::all();
        return view('list', ['personnages' => $personnages]);
    }

    public function personnage($id)
    {
        $personnage = Personnage::findOrFail($id);
        return view('personnage', ['personnage' => $personnage]);
    }

    public function ajoutPersonnage()
    {
        $dessinateurs = Dessinateur::all()->sortBy('name');
        return view('ajoutPersonnage', ['dessinateurs' => $dessinateurs]);
    }

    public function majPersonnage($id)
    {
        $personnage = Personnage::findOrFail($id);
        $dessinateurs = Dessinateur::all()->sortBy('name');
        return view('majPersonnage', ['personnage' => $personnage, 'dessinateurs' => $dessinateurs]);
    }
}