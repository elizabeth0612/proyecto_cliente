<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form action="{{route('clientes.store')}}" method="POST">
		@csrf
		<div>
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">AGREGAR CLIENTE</h5>
		      </div>
		      <div class="modal-body">
		        <div class="form-group">
				    <label for="exampleInputEmail1">Nombre</label>
				    <input type="text" class="form-control"  name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('nombre')}}">
				  </div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Apellido</label>
				    <input type="text" class="form-control" name="apellido" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('apellido')}}">
				  </div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">Telefono</label>
				    <input type="text" class="form-control" name="telefono" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('telefono')}}">
				  </div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Dni</label>
				    <input type="text" class="form-control" name="dni" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('dni')}}">
				  </div>
		      </div>
		      <div class="modal-footer">
		        <input type="submit"  class="btn btn-primary" value="GUARDAR"> 
		      </div>
		    @if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		    </div>
		  </div>
	</div>
	</form>


	

</body>
</html>