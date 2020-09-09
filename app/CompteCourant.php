<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteCourant extends Model
{
    protected $fillable = array('client_salaries_id', 'numero','rib','solde','dateOuverture','agios');
    public static $rules = array('client_salaries_id'=>'required|integer',
                                 'numero'=>'required|min:2',
                                 'rib'=>'required|min:9',
                                 'solde'=>'required|min:5',
                                 'dateOuverture' =>'min:3',
                                 'agios'=>'numeric|min:5',
                                 
                                );

    public function clientS()
    {
        return $this->belongsTo('App\ClientSalarie');
    }

}
