@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h2 class="center">Cadastro de Funcionário no Sistema</h2>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {{ csrf_field() }}

          <div class="input-field col s12">
            <input type="text" name="name" value="{{ old('name') }}" class="validate" autofocus>
            <label>Nome</label>
            @if ($errors->has('name'))
                <span>
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="input-field col s12">
            <input type="text" name="email" value="{{ old('email') }}" class="validate">
            <label>E-mail</label>
            @if ($errors->has('email'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          
          <div class="input-field col s12">
            <input type="tel" name="phone" pattern="\[0-9]{4,6}[0-9]{3,4}$" value="{{ old('phone') }}" class="validate">
            <label>Telefone</label>
            @if ($errors->has('phone'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>  

         <div class="input-field col s12">
         <label>Data de Nascimento</label><br>   
         <input type="date" name="dateofbirth" value="{{ old('dateofbirth') }}" class="validate">
            
            @if ($errors->has('dateofbirth'))
                <span>
                    <strong>{{ $errors->first('dateofbirth') }}</strong>
                </span>
            @endif
          </div>

          <div class="input-field col s12">
         <label>Cargo</label>  
         <input type="text" name="office" value="{{ old('office') }}" class="validate">
            
            @if ($errors->has('office'))
                <span>
                    <strong>{{ $errors->first('office') }}</strong>
                </span>
            @endif
          </div>

        <div class="input-field col s12">
         <label>Salário</label>  
         <input type="number" name="salary" value="{{ old('salary') }}" class="validate">
            
            @if ($errors->has('salary'))
                <span>
                    <strong>{{ $errors->first('salarye') }}</strong>
                </span>
            @endif
          </div>


          <div class="input-field col s12">
            <input type="password"  name="password" value="{{ old('password') }}" class="validate">
            <label>Senha</label>
            @if ($errors->has('password'))
                <span>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="input-field col s12">
            <input type="password"  name="password_confirmation" value="{{ old('password_confirmation') }}" class="validate">
            <label>Confirme a senha</label>
            @if ($errors->has('password_confirmation'))
                <span>
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </div>
          <div class="col s12">
            <br/>
            <button class="btn green">Cadastrar</button>
          </div>
      </form>
    </div>
</div>

@endsection
