<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form action="{{route('clientes.update',$cliente)}}" method="POST">
		@csrf
		@method('PUT')
		<div>
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">EDITAR DE CLIENTE </h5>
		      </div>
		      <div class="modal-body">
		        <div class="form-group">
				    <label for="exampleInputEmail1">Nombre</label>
				    <input type="text" class="form-control"  name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->nombre}}">
				  </div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Apellido</label>
				    <input type="text" class="form-control" name="apellido" value="{{$cliente->apellido}}" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">Telefono</label>
				    <input type="text" class="form-control" name="telefono" value="{{$cliente->telefono}}" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Dni</label>
				    <input type="text" class="form-control" name="dni" value="{{$cliente->dni}}" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>
		      </div>
		      <div class="modal-footer">
		        <input type="submit"  class="btn btn-primary" value="GUADAR"> 
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
		      </div>
		    </div>
		  </div>
	</div>
	</form>
	

</body>
</html>