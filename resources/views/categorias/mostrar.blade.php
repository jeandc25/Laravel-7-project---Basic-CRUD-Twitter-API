@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1 class="mb-4">Listado de Categorias</h1>
                
                @foreach ($categorias as $categor)
                <div class="card mb-4">
                        <div class="card-header">{{$categor->id}}. {{$categor->nombre}}</div>
                        <div class="card-body">{{$categor->icono}}. - {{$categor->detalle}}</div>
                        
                </div>
                @endforeach
                {{$categorias->links()}} 



            
        </div>
    </div>
</div>
@endsection
