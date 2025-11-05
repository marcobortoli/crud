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
                    <table>
                    <tr><td>
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Usuarios</a>
                    </button>
                    </td><td>  
                    - Cadastro de Usuarios do Sistema </br>
                    </td></tr>
                    <tr><td>
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Associados</a>
                    </button>
                    </td><td>  
                    - Cadastro de Associados </br>
                    </td></tr>
                    <tr><td>
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Convenios</a>
                    </button> 
                    </td><td> 
                    - Cadastro de Convenios da Instituicao </br>
                    </td></tr>
                    <tr><td>
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lancamentos</a>
                    </button> 
                    </td><td>  
                    - Lancamentos de movimentos <br>
                    </td></tr>
                    <tr><td>
                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Extrato</a>
                    </button> 
                    </td><td>  
                    - Relatorio do Extrato de Lancamento <br>
                    </td></tr>
                    <tr><td>

                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Devedores</a>
                    </button> 
                    </td><td>  
                    - Relatorio de Associados com Saldo Devedor <br>
                    </td></tr>
                    <tr><td>

                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Credor</a>
                    </button> 
                    </td><td>  
                    - Relatorio de Associados Credores <br>
                    </td></tr>
                    <tr><td>

                    <button class="btn btn-outline-info btn-sm">
                        <a href="{{url("/usuarios")}}">Lista de Lancamentos</a>
                    </button> 
                    </td><td>  
                    - Relatorio de Lancamentos por Convenio <br>
                    </td></tr>
                    <table>

                    <!--{{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
