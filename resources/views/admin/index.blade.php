@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row center">
      <h2>Admin</h2>
    </div>

    @include('admin._caminho')

    <div class="row">

        <div class="col s12 m6">
          <div class="card purple darken-2">
            <div class="card-content white-text">
              <span class="card-title">Usuários</span>
              <p>Usuários do sistema</p>
            </div>
            <div class="card-action">
              <a href="{{route('usuarios.index')}}">Visualizar</a>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card green">
            <div class="card-content white-text">
              <span class="card-title">Perfil</span>
              <p>Alterar dados do perfil de usuários</p>
            </div>
            <div class="card-action">
              <a href="{{route('perfil.index')}}">Visualizar</a>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card orange darken-4">
            <div class="card-content white-text">
              <span class="card-title">Papéis - Setores</span>
              <p>Listar papéis do sistema</p>
            </div>
            <div class="card-action">
              <a href="{{route('papeis.index')}}">Visualizar</a>
            </div>
          </div>
        </div>

      </div>


</div>
@endsection
