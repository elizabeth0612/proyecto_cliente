<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	
	<br>
	<br>
	
	<div class="container">
		@if(session('guardado'))
			<div class="alert alert-primary" role="alert">
	 			 <strong>{{session('guardado')}}</strong>
			</div>
		@endif
		<div>
			<a class="btn btn-primary" href="{{route('clientes.create')}}" role="button">AGREGAR</a>
		</div>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Telefono</th>
		      <th scope="col">Dni</th>
		      <th scope="col">Editar</th>
		      <th scope="col">Eliminar</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($clientes as $cliente)
		    <tr>
		      <th scope="row">{{$cliente->id_cliente}}</th>
		      <td>{{$cliente->nombre}}</td>
		      <td>{{$cliente->apellido}}</td>
		      <td>{{$cliente->telefono}}</td>
		      <td>{{$cliente->dni}}</td>
		      <td>
		      	<a class="btn btn-primary" href="{{route('clientes.edit',$cliente)}}" role="button">editar</a>
		      </td>
		      <td>
		      	<form action="{{route('clientes.destroy',$cliente)}}" method="POST">
		      		@csrf
		      		@method('DELETE')
		      		<input type="submit"  class="btn btn-primary" value="ELIMINAR" onclick="return confirm('desea eliminar')">
		      	</form>
		      </td>
		    </tr>
		   @endforeach
		    
		  </tbody>
    </table>
	</div>
</body>
</html>