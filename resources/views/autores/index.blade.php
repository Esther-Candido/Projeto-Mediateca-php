@extends('templates.main')

@section('title','Listar Autores')

@php
    $prefixo= request()->routeIs('admin*') ? 'admin.' : 'cliente.';
@endphp

@section('content')
    {{--Botao Criar--}}
    @if(request()->routeIs('admin*'))
        <div class="row m-4">
            <div class="col-12 ">
                <a href="{{route('admin.autores.create')}}" class="btn btn-primary float-end"><i
                        class="fa-solid fa-plus"></i>
                    Inserir Autor</a>
            </div>
        </div>
    @endif
    @if(count($autores))
        <table class="table table-bordered table-striped">
            {{--Header da Tabela--}}
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th class="w-75" scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>

            {{--Linhas--}}
            <tbody>
            @foreach($autores as $autor)
                <tr>
                    <th scope="row">{{$autor->id}}</th>
                    <td>{{$autor->nome}}</td>
                    {{--Açoes--}}
                    <td>
                        {{--Botão Show--}}
                        <a href="{{route($prefixo.'autores.show',['autor'=>$autor])}}" class="btn btn-primary"><i
                                class="far fa-eye"></i></a>
                        @if(request()->routeIs('admin*'))
                            {{--Botão Edit--}}
                            <a href="{{route('admin.autores.edit',['autor'=>$autor])}}" class="btn btn-success"><i
                                    class="fas fa-edit"></i></a>
                            {{--Botão Delete--}}
                            <form class="form-custom" method="POST"
                                  action="{{route('admin.autores.destroy',['autor'=>$autor])}}" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
