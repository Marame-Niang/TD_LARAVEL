@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des clients non salariés</div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                      <tr>
                          <th>Identifiant</th>
                          <th> Matricule du client non salarie </th>
                          <th> CNI du client non salarie</th>
                          <th> Prenom du client non salarie</th>
                          <th> Nom du client non salarie</th>
                          <th> Sexe du client non salarie</th>
                          <th> Date de naissance du client non salarie</th>
                          <th> Adresse du client non salarie</th>
                          <th> Telephone du client non salarie</th>
                          <th> Email du client non salarie</th>
                          <th>Action</th>
                          <th>Action</th>                            
                      </tr>
                      @foreach ($liste_clientNS as $clientNS)
                          <tr>
                              <td>{{ $clientNS->id}}</td>
                              <td>{{ $clientNS->matricule}}</td>
                              <td>{{ $clientNS->cni}}</td>
                              <td>{{ $clientNS->prenom}}</td>
                              <td>{{ $clientNS->nom}}</td>
                              <td>{{ $clientNS->sexe}}</td>
                              <td>{{ $clientNS->datenaiss}}</td>
                              <td>{{ $clientNS->adresse}}</td>
                              <td>{{ $clientNS->telephone}}</td>
                              <td>{{ $clientNS->email}}</td>
                              <td><a href="{{ route('editclientnonsalarie', ['id'=>$clientNS->id]) }}"> Editer </a> </td>
                              <td><a href="{{ route('deleteclientnonsalarie', ['id=>$clientNS->id']) }}"> Supprimer </a> </td>

                          </tr>
                      @endforeach
                  </table>
                    {{ $liste_clientNS->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
