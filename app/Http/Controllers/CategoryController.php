<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
     //affichage request
    public function AddCategory (Request $request ) {
       $request->validate(
            ['name' => 'required', 
            'description' => 'required']
       );
        // dd($request);
        //traitement d'Ajout
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        if($category->save()){
            return redirect('/category/list')->with('msg',"votre catégorie est ajoutée avec succés");
        }else {
            return 'Erreur d\'ajout';
        };
 
        
    }

    //traitement pour afficher les détails de catégorie
    public function ShowFormCategory(){
        
        return view('form');
    }

    //traitement qui permet d'afficher la liste des catégories
    public function Liste () {
        //regrouper les catégories de la base de données
        $categories = Category::all();
        // dd($categories);
        return view('liste')->with('categoriesData', $categories);
    }

    //traitement qui efface la catégorie
    public function delete($id)
    {
        $categorie = Category::find($id);
        
        if ($categorie) {
            $categorie->delete();
            return  redirect('/category/list')->with('msg', 'votre categorie est supprimé avec succés');
        } else {
            return "Suppression est échouée";
        }
    }
    

}
