<?php

namespace App\Http\Controllers;
use App\CompteSimple;
use App\ClientNonSalarie;
use Illuminate\Http\Request;

class CompteSimpleController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

    public function add()
    {
      $clientns = ClientNonSalarie::all();
      // var_dump($clientns);
      // die;
      return view('compteSimple.add', ['clientns'=>$clientns]);
    }

    public function getAll()
    {
      // $liste_clientNS = ClientNonSalarie::all();
      $liste_clientNS = CompteSimple::paginate(5);
      return redirect('compteSimple/getAll')->with(['liste_comptesimple'=>$liste_comptesimple]);
    } 

    public function edit($id)
    {
      // var_dump($id);
      // die;
      $clientns = CompteSimple::find($id);
      return redirect("compteSimple/edit")->with(['comptesimple' => $comptesimple]);
    }

    public function update(Request $request)
    {
      $comptesimple = CompteSimple::find($request->id);
      $comptesimple->numero = $this->codeAleatoire(8);
      $comptesimple->rib = $this->codeAleatoire(9);
      $comptesimple->solde = $request->solde;
      $comptesimple->dateOuverture = $request->dateOuverture;
      $comptesimple->fraisOuverture = $request->fraisOuverture;
      $comptesimple->remuneration = $request->remuneration;
      $comptesimple->entreprise_id = $request->entreprise_id;
      $comptesimple->client_salaries_id = $request->client_salaries_id;
      $comptesimple->client_non_salaries_id = $request->client_non_salaries_id;
      $comptesimple = $comptesimple->save();
      return redirect('/compteSimple/getAll');
    }

    public function delete($id)
    {
      $clientns = CompteSimple::find($id); 
      if ($clientns != null)
      {
        $clientns->delete();
      }
      return redirect('/compteSimple/getAll');
    }

    public function persist(Request $request)
    {
      
      $comptesimple = new CompteSimple();
      $comptesimple->numero = $this->codeAleatoire(8);
      $comptesimple->rib = $this->codeAleatoire(9);
      $comptesimple->solde = $request->solde;
      $comptesimple->dateOuverture = $request->dateOuverture;
      $comptesimple->fraisOuverture = $request->fraisOuverture;
      $comptesimple->remuneration = $request->remuneration;
      $comptesimple->entreprise_id = $request->entreprise_id;
      $comptesimple->client_salaries_id = $request->client_salaries_id;
      $comptesimple->client_non_salaries_id = $request->client_non_salaries_id;
      $resultat = $comptesimple->save();
      // echo $resultat;
      return redirect('clientnonSalarie.liste',['confirmation' =>$resultat]);
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
