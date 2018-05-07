@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Lista de Usuários: {{$usuario->name}}</h2>

		@include('admin._caminho')

		<div class="row">
			<form action="{{route('usuarios.perfil.store',$usuario->id)}}" method="post">
			{{ csrf_field() }}
			<div class="input-field">
				<select name="perfil_id">
					@foreach($perfil as $valor)
					<option value="{{$valor->id}}">{{$valor->nome}}</option>
					@endforeach
				</select>
			</div>
				<button class="btn blue">Adicionar</button>
			</form>


		</div>

		<div class="row">
			<table>
				<thead>
					<tr>

						<th>Perfil</th>
						<th>Descrição</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($usuario->perfis as $perfil)
					<tr>
						<td>{{ $perfil->nome }}</td>
						<td>{{ $perfil->descricao }}</td>

						<td>

							<form action="{{route('usuarios.perfil.destroy',[$usuario->id,$perfil->id])}}" method="post">
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button title="Deletar" class="btn red"><i class="material-icons">delete</i></button>
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>

		</div>

	</div>

@endsection
