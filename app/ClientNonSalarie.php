<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientNonSalarie extends Model
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
                                 'raison_sociale'=>'min:9',
                                 'salaire'=>'min:9',
                                 'nom_employeur'=>'min:9',
                                 'adr_employeur'=>'min:9',
                                );
                                
    public function clientS()
    {
        return $this->belongsTo('App\ClientSalarie');
    }

    public function compteB()
    {
        return $this->hashMany('App\CompteBloque');
    }
}
