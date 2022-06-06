<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Classes;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class EtudiantController extends Controller
{
   public function index(){
        $etudiants = Etudiant::orderBy("nom","asc")->get();

        return view("etudiant",compact("etudiants"));
    }
    public function create(){
        $etudiants = Etudiant::all();
        return view("createEtudiant",compact("etudiants"));
    }
    public function edit(Etudiant $etudiant){
        return view("editEtudiant",compact("etudiant"));
    }
    public function store(Request $request){
         
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required"
    
        ]);
        Etudiant::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "age"=>$request->age,
            "email"=>$request->email
        ]);
        return back()->with("success","etudiant ajouter avec succès");
        //Etudiant::create($request->all());
    }
    public function delete(Etudiant $etudiant){
        $etudiant->delete();
        return back()->with("successDelete","Etudiant supprimé avec succès!");
    }
    public function update(Request $request, Etudiant $etudiant ){
         
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required"
    
        ]);
        $etudiant->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "age"=>$request->age,
            "email"=>$request->email
        ]);
        return back()->with("success","etudiant mise a jour avec succès");
        //Etudiant::create($request->all());
    }
}
