<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteBloque extends Model
{
    protected $fillable = array('client_salaries_id', 'client_non_salaries_id', 'entreprises_id', 'numero','rib','solde','dateOuverture','fraisOuverture', 'remuneration', 'dateDebut','dateFin');
    public static $rules = array('client_salaries_id'=>'integer',
                                 'client_non_salaries_id'=>'integer',
                                 'entreprises_id'=>'integer',
                                 'numero'=>'required|min:2',
                                 'rib'=>'required|min:9',
                                 'solde'=>'required|min:5',
                                 'fraisOuverture'=>'numeric|min:5',
                                 'remuneration'=>'numeric|min:5',
                                 'dateOuverture' =>'min:3',
                                 'dateDebut'=>'min:3',
                                 'dateFin'=>'min:3',

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
