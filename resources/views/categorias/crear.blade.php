@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva categoria</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{url('categorias')}}" method="POST">
                    @csrf
                        <div class="form-group row">
                            <label for="id">Ingresa el ID</label>
                            <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id">

                            @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                        </div>
                        <div class="form-group row">
                            <label for="nombre">Ingresa el Nombre</label>
                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">

                            @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                        </div>    
                        <div class="form-group row">
                            <label for="icono">Ingresa el icono</label>
                            <input id="icono" type="text" class="form-control @error('icono') is-invalid @enderror" name="icono" value="{{ old('icono') }}" required autocomplete="icono">

                            @error('icono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="detalle">Detalle</label>
                            <textarea id="detalle"  class="form-control @error('detalle') is-invalid @enderror" name="detalle" required>{{ old('detalle') }}</textarea>

                            @error('detalle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">publicar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
