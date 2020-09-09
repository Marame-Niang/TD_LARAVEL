<?php

namespace App\Http\Controllers;
use App\ClientNonSalarie;
use Illuminate\Http\Request;

class ClientNonSalarieController extends Controller
{
    public function add()
    {
      return view('clientNonSalarie.add');
    }

    public function getAll()
    {
      // $liste_clientNS = ClientNonSalarie::all();
      $liste_clientNS = ClientNonSalarie::paginate(5);
      return view('clientNonSalarie.liste',['liste_clientNS'=>$liste_clientNS] );
    } 

    public function edit($id)
    {
      var_dump($id);
      die;
      return view("clientNonSalarie.edit");
    }

    public function update()
    {
      return $this->getAll();
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
      return view('clientNonSalarie.add', ['confirmation' =>$resultat]);
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
