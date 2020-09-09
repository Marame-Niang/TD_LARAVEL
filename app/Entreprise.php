<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = array('nom_entreprise','tel_entreprise','email_entreprise','budget_entreprise','adr_entreprise');
    public static $rules = array('nom_entreprise'=>'required|min:2',
                                 'tel_entreprise'=>'required|min:9',
                                 'email_entreprise'=>'required|min:8',
                                 'budget_entreprise' =>'required|min:13',
                                 'adr_entreprise'=>'required|min:9',
                                );
                                
    public function compte()
    {
        return $this->hashMany('App\Compte');
    }
}
