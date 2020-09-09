<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientSalarie extends Model
{
    protected $fillable = array('matricule','cni','nom','prenom','sexe','datenaiss','telephone','adresse','email','raison_sociale','salaire','nom_employeur','adr_employeur');
    public static $rules = array('matricule'=>'required|min:9',
                                 'cni' =>'required|min:13',
                                 'nom'=>'required|min:2',
                                 'prenom'=>'required|min:3',
                                 'sexe'=>'required|min:7',
                                 'datenaiss'=>'required|min:8',
                                 'telephone'=>'required|min:9',
                                 'email'=>'min:5',
                                );
    public function compteS()
    {
        return $this->hashMany('App\CompteSimple');
    }

    public function compteC()
    {
        return $this->hashMany('App\CompteCourant');
    }

    public function compteB()
    {
        return $this->hashMany('App\CompteBloque');
    }
}
