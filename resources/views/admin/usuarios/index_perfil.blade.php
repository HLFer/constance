@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Perfis de Usuários</h2>

		@include('admin._caminho')


		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
						<td>

							<a title="Visualizar" class="btn green" href="{{route('usuarios.perfil',$usuario->id)}}"><i class="material-icons">view_list</i></a>
                            <a title="Editar" class="btn orange" href="{{route('usuarios.perfil',$usuario->id)}}"><i class="material-icons">edit</i></a>
                            <a title="Apagar" class="btn red" href="{{route('usuarios.perfil',$usuario->id)}}"><i class="material-icons">delete</i></a>

						</td>
					</tr>
				@endforeach
				</tbody>
			</table>

		</div>

	</div>

@endsection