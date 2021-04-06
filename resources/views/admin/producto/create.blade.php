
@extends('template.index')
@section('contenido')
<form action="{{route('productos.store')}}" method="POST">
    @csrf
    <div class="card mt-4">
          
        <div class="row">
            
            <div class="col-md-4">
                <label >NAME</label>
                <input type="text" name="name">
            </div>
            <div class="col-md-4">
                <label>PRICE</label>
                <input type="text" name="price"> </P>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2">
                <input type="submit" class="btn btn-success btn-block " value="Registrar">
            </div>
            <div class="col-md-2">
                <a class="btn btn-danger btn-block" href="{{route('productos.index')}}" value="Cancel">Cancel </a>
            </div>		
        </div>
        
    </div>         
</form>
@endsection