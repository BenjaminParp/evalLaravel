<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personnage;

class ActionController extends Controller
{
    public function ajoutPersonnage(Request $request) {
        $personnage = new personnage;
        $personnage->nom = $request->nom;
        $personnage->déssinateur = $request->déssinateur;
        $personnage->nom_de_bd = $request->nom_de_bd;
        $personnage->année_de_création = $request->année_de_création;
        $personnage->save();
        return redirect('/list');
    }

    public function supprPersonnage(Request $request) {
        $personnage = personnage::find($request->id);
        $personnage->delete();

        //personnage::destroy($request->id);
        return redirect('/list');
    }

    public function majPersonnage(Request $request) {
        $personnage = personnage::findOrFail($request->id);
        $personnage->nom = $request->nom;
        $personnage->déssinateur = $request->déssinateur;
        $personnage->nom_de_bd = $request->nom_de_bd;
        $personnage->année_de_création = $request->année_de_création;
        $personnage->save();
        return redirect('/list');
    }
}