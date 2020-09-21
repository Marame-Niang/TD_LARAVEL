@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire des d'enregistrement des comptes simples </div>

                <div class="card-body">
                    @if(isset($confirmation))
                        @if($confirmation == 1)
                            <div class="alert bg-success">Compte Simple ajouté</div>
                        @else
                            <div class="alert bg-danger">Compte Simple non ajouté</div>
                        @endif 
                    @endif
                  <form class="" action="{{ route('persistcomptesimple') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label class="control-label" for="solde"> Solde </label>
                        <input class="form-control" type="text" name="solde" id="solde"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="dateOuverture"> D'ate d'ouverture </label>
                        <input class="form-control" type="date" name="dateOuverture" id="dateOuverture"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="fraisOuverture"> Frais d'ouverture </label>
                        <input class="form-control" type="text" name="fraisOuverture" id="fraisOuverture"/>
                    </div>
                    <div class="form-group">
                    <label class="control-label" for="remuneration"> Rémunération </label>
                    <input class="form-control" type="text" name="remuneration" id="remuneration">
                            
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="client_non_salaries_id"> Choisissez une Entreprise </label>
                        <select class="form-control" name="client_non_salaries_id" id="client_non_salaries_id">
                            <option value="0"> Faites un choix </option>
                            @foreach($clientns as $clientn)
                            <option 
                                value="{{$clientn->id}}"> 
                                {{$clientn->prenom}} 
                                {{$clientn->nom}} 
                            </option>
                            @endforeach
                                
                        </select>
                    </div>
                    <!--div class="form-group">
                        <label class="control-label" for="email"> Email </label>
                        <input class="form-control" type="email" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="datenaiss"> Date de naissance </label>
                        <input class="form-control" type="date" name="datenaiss" id="datenaiss"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="adresse"> Adresse </label>
                        <input class="form-control" type="text" name="adresse" id="adresse"/>
                    </div -->
                    <div class="form-group">
                      <input class="btn btn-success" type="submit" name="envoyer" value="Envoyer"/>
                      <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                    </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
