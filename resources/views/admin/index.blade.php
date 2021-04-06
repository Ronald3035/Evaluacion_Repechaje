@extends('template.index')
@section('contenido')
  <h1>Listado de Productos</h1>

	<div class="container">

            <div>
                <a href="{{route('productos.create')}}" class="btn btn-info">create</a>
            </div>
                
		    <table class="table table-stripped table-bordered">
		    	
		    	<thead>
		    		<tr>
			    		
			    		<th>NAME</th>
			    		<th>PRICE</th>
			    		
		    		</tr>
		    	</thead>
		    	<tbody>
		    		@foreach($productop as $prod)
		    		<tr>
			    		
			    		<td>{{$prod->name}}</td>
			    		<td>{{$prod->price}}</td>
			    		
		    		</tr>
		    		@endforeach
		    	</tbody>
		    	
		     </table>	
	
		     <div class="row">
		     		{{$productop->render()}}
		     </div>	
	</div>	

@endsection