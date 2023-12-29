@extends('templates.main')

@section('title','Listar Obras')

@section('content')
    <div class="row m-4">
        <div class="col-12 ">
            <a href="{{route('obras.create')}}" class="btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Inserir Obra</a>
        </div>
    </div>

    <div class="row m-4">
        <div class="col-12">

            {{--Se existirem Obras--}}
            @if(count($obras))
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th class="w-50" scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Exemplares</th>
                    <th scope="col">Preço</th>
                    <th class="w-auto" scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($obras as $obra)
                    <tr>
                        <th scope="row">{{$obra->id}}</th>
                        <td>{{$obra->nome}}</td>
                        <td>
                            @if($obra instanceof Livro)
                                Livro
                            @else
                                DVD
                            @endif
                        </td>
                        <td>{{$obra->exemplares}}</td>
                        <td>{{$obra->preco}} €</td>
                        <td>
                            <a href="{{route('obras.show',$obra->id)}}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                            <a href="{{route('obras.edit',$obra->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <form class="form-custom" style="display: inline" method="POST" action="{{route('obras.delete',$obra->id)}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
            {{--Não existem Obras--}}
                <div class="alert alert-warning" role="alert">
                Não existem obras
            </div>
            @endif
        </div>
    </div>
@endsection

