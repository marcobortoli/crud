@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
            <div class="card-header">
                <div class="btn-group">
                <button style="margin-right: 15px"> <a href="{{url("/")}}">Voltar</a></button>
                <button style="margin-right: 15px"> <a href="{{url("/usuarios/new")}}">Novo Usuário</a></button>
                <form action = "{{ route('usuarios.search') }}" method="post">
                      @csrf
                      <input type="text" name="search" placeholder="filtrar:">
                      <button type="submit"> Filtrar </button>
                </div>      
                </form>
            </div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista dos usuários</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                          <tr>
                            <th scope="row">{{$usuario->id}}</th>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td><div class="btn-group">
                            <a href="/usuarios/{{ $usuario->id }}/edit" class="btn btn-info btn-sm">EDITAR</a>
                            <form action="usuarios/{{ $usuario->id }}/delete" method="post">
                                @csrf
                                @method('post')
                                <button
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Tem certeza que deseja DELETAR este usuário? Essa ação não pode ser desfeita!');"
                                >
                                    DELETAR
                                </button>
                            </form></div>
                            </td>
                          </tr>
                          @endforeach
                          @if (isset($filtro )) 
                              {{ $usuarios->appends($filtro)->Links() }}
                          @endif    
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
