@extends('templates.main')

@section('title','Mostrar Autor')

@php
    $prefixo= request()->routeIs('admin*') ? 'admin.' : 'cliente.';
@endphp

@section('content')
    <div class="row">
        <div class="col-12 p-3">
            <div class="card obra">
                <div class="card-body">
                    <div class="row">
                        {{--Imagem--}}
                        <div class="col-lg-3 col-md-5 text-center">
                            <img src="{{asset('images/no-image.png')}}" class="img-fluid rounded" alt=""/>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <h3 class="fw-bold fs-3">{{$autor->nome}}</h3>
                            <dl class="row">
                                <dt class="col-sm-2 fw-normal">Adicionado a:</dt>
                                <dd class="col-sm-4 fw-normal text-muted">@isset($autor->created_at)
                                        {{$autor->created_at->diffForHumans()}}
                                    @endisset</dd>
                                <dt class="col-sm-2 fw-normal">Atualizada a:</dt>
                                <dd class="col-sm-4 fw-normal text-muted">@isset($autor->updated_at)
                                        {{$autor->updated_at}}
                                    @endisset</dd>
                            </dl>
                            <hr/>
                            <div class="row mt-2">
                                <h3 class="text-dark-emphasis fw-semibold">Biografia</h3>
                                <p>{{$autor->bio}}</p>
                            </div>

                            {{-- ##### Lista de Obras do Autor #### --}}
                            @if(count($obras))
                                <div class="row mt-2 ">
                                    <h3 class="text-dark-emphasis fw-semibold">Obras de sua autoria</h3>
                                    <hr>
                                    <ul class="list-group list-group-flush">
                                        @foreach($obras as $obra)
                                            <li class="list-group-item">{{$obra->nome}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{-- ######### --}}

                            <div class="col-12 text-center align-text-bottom">
                                @if(request()->routeIs('admin*'))
                                    {{--Botão Criar novo--}}
                                    <a href="{{route('admin.autores.create')}}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i> Inserir Autor</a>
                                    {{--Botão editar--}}
                                    <a href="{{route('admin.autores.edit',['autor'=>$autor])}}" class="btn btn-success"><i
                                            class="fa-solid fa-edit"></i> Editar</a>
                                    {{--Botão apagar--}}
                                    <form class="form-custom" method="POST"
                                          action="{{route('admin.autores.destroy',['autor'=>$autor])}}"
                                          style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>
                                            Apagar
                                        </button>
                                    </form>
                                @endif
                                {{--Botão Lista de Utilizadores--}}
                                <a href="{{route($prefixo.'autores.index')}}"
                                   class="btn btn-secondary float-md-end float-lg-end"><i
                                        class="fa-solid fa-table-list"></i> Lista de Autores </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
