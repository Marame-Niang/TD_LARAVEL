@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire des clients non salariés</div>

                <div class="card-body">
                    @if(isset($confirmation))
                        @if($confirmation == 1)
                            <div class="alert bg-success">Client non salarié ajouté</div>
                        @else
                            <div class="alert bg-danger">Client non salarié non ajouté</div>
                        @endif 
                    @endif
                  <form class="" action="{{ route('persistclientNS') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label class="control-label" for="cni"> CNI </label>
                        <input class="form-control" type="text" name="cni" id="cni"></input>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="prenom"> Prenom </label>
                        <input class="form-control" type="text" name="prenom" id="prenom"></input>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nom"> Nom </label>
                        <input class="form-control" type="text" name="nom" id="nom"></input>
                    </div>
                    <div class="form-group">
                    <label class="control-label" for="sexe"> Sexe </label>
                        <select class="form-control" name="sexe" id="sexe" class="" onblur="testChamps(this)" >
                            <option value="">----------------</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="datenaiss"> Date de naissance </label>
                        <input class="form-control" type="date" name="datenaiss" id="datenaiss"></input>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="adresse"> Adresse </label>
                        <input class="form-control" type="text" name="adresse" id="adresse"></input>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="telephone"> Telephone </label>
                        <input class="form-control" type="text" name="telephone" id="telephone"></input>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email"> Email </label>
                        <input class="form-control" type="email" name="email" id="email"></input>
                    </div>
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
