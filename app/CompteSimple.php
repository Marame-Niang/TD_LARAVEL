<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteSimple extends Model
{
    protected $fillable = array('client_non_salaries_id', 'client_salaries_id', 'entreprise_id', 'numero','rib','solde','dateOuverture','fraisOuverture', 'remuneration');
    public static $rules = array('client_non_salaries_id'=>'integer',
                                 'client_salaries_id'=>'integer',
                                 'entreprise_id'=>'required|integer',
                                 'numero'=>'required|min:2',
                                 'rib'=>'required|min:9',
                                 'solde'=>'required|min:5',
                                 'dateOuverture' =>'min:3',
                                 'fraisOuverture'=>'numeric|min:5',
                                 'remuneration'=>'numeric|min:5', 
                                );
                                
    public function clientS()
    {
        return $this->belongsTo('App\ClientSalarie');
    }

    public function clientNS()
    {
        return $this->belongsTo('App\ClientNonSalarie');
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    
}
