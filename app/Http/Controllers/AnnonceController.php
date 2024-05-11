<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;



class AnnonceController extends Controller
{
    public function index(){
        $annonces=Annonce::with('categorie')->paginate(4);
        return view('welcome',['annonces'=>$annonces]);
    }

    public function show($id){
        $annonce=Annonce::with('categorie','user')->findOrFail($id);
        $memesCategories=Annonce::with('categorie')
                                    ->where('id_categorie',$annonce->id_categorie)
                                    ->where('id','!=',$id)
                                    ->paginate(4);
        return view('detail',['annonce'=>$annonce,'memesCategories'=>$memesCategories]);
    }

    public function search(Request $request)
{
    $localisation = $request->input('localisation');
    $prixMax = $request->input('prixMax');

    $annonces = Annonce::with('categorie', 'user')
                    ->where(function ($query) use ($localisation, $prixMax) {
                        if ($localisation) {
                            $query->where('localisation', 'like', "%$localisation%");
                        }
                        if ($prixMax) {
                            $query->orWhere('prix', '<=', $prixMax);
                        }                        
                    })
                    ->paginate(5);

                    return view('recherches', [
                        'annonces' => $annonces
                    ])->with('status', "Résultats pour '$localisation' et prix maximal '$prixMax' FCFA");
                    
}


public function resultats(){
     $annonces=Annonce::with('categorie','user')->paginate(8);
    return view('recherches',['annonces'=>$annonces]);
}

public function search2(Request $request)
{
    $localisation = $request->input('localisation');
    $prixMax = $request->input('prixMax');

    $annonces = Annonce::with('categorie', 'user')
                    ->where(function ($query) use ($localisation, $prixMax) {
                        if ($localisation) {
                            $query->where('localisation', 'like', "%$localisation%");
                        }
                        if ($prixMax) {
                            $query->orWhere('prix', '<=', $prixMax);
                        }                        
                    })
                    ->paginate(5);

                    return view('recherches', [
                        'annonces' => $annonces
                    ])->with('status', "Résultats pour '$localisation' et prix maximal '$prixMax' FCFA");
                    
}
 

}
