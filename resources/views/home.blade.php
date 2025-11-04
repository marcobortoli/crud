@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> Seja bem vindo ! </h1>
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{ route("register")}} ">REGISTER</a>
                    </button>
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Usuarios</a>
                    </button>  

                    <!--{{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
