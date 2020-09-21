<?php

namespace App\Http\Controllers;
use App\ClientNonSalarie;
use Illuminate\Http\Request;

class ClientNonSalarieController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function add()
    {
      return redirect('/clientnonSalarie/add');
    }

    public function getAll()
    {
      // $liste_clientNS = ClientNonSalarie::all();
      $liste_clientNS = ClientNonSalarie::paginate(5);
      return redirect('/clientnonSalarie/getAll')->with(['liste_clientNS'=>$liste_clientNS]);
    } 

    public function edit($id)
    {
      // var_dump($id);
      // die;
      $clientns = ClientNonSalarie::find($id);
      return redirect("/clientnonSalarie/edit")->with(['clientNS' => $clientns]);
    }

    public function update(Request $request)
    {
      $clientns = ClientNonSalarie::find($request->id);
      $clientns->cni = $request->cni;
      $clientns->matricule = $this->codeAleatoire(8);
      $clientns->prenom = $request->prenom;
      $clientns->nom = $request->nom;
      $clientns->sexe = $request->sexe;
      $clientns->datenaiss = $request->datenaiss;
      $clientns->adresse = $request->adresse;
      $clientns->telephone = $request->telephone;
      $clientns->email = $request->email;
      $clientns = $nonsalarie->save();
      return redirect('/clientnonSalarie/getAll');
    }

    public function delete($id)
    {
      $clientns = ClientNonSalarie::find($id); 
      if ($clientns != null)
      {
        $clientns->delete();
      }
      return $this->getAll();
    }

    public function persist(Request $request)
    {
      
      $nonsalarie = new ClientNonSalarie();
      $nonsalarie->cni = $request->cni;
      $nonsalarie->matricule = $this->codeAleatoire(8);
      $nonsalarie->prenom = $request->prenom;
      $nonsalarie->nom = $request->nom;
      $nonsalarie->sexe = $request->sexe;
      $nonsalarie->datenaiss = $request->datenaiss;
      $nonsalarie->adresse = $request->adresse;
      $nonsalarie->telephone = $request->telephone;
      $nonsalarie->email = $request->email;
      $resultat = $nonsalarie->save();
      // echo $resultat;
      return redirect('/clientnonSalarie/add')->with(['confirmation' =>$resultat]);
    }

    function codeAleatoire($car)
    {
        $string = "";
        $chaine = "2643789ABDCEFGHJKMNPRTUVW";
        srand((double)microtime()*1000000);
        for($i=0; $i<$car; $i++)
        {
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }
}
