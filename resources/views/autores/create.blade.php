@extends('templates.main')

@section('title','Inserir Autor')

@section('content')
    @if($errors->any())
        {{--Mensagem de erro do topo--}}
        <div class="row p-2">
            <div class="alert alert-danger" role="alert">
                Verifique os dados inseridos
            </div>
        </div>
    @endif
    <form method="POST" action="{{route('admin.autores.store')}}">
        @csrf
        <div class="row border p-3">
            <div class="row justify-content-center m-2">
                {{-- Nome --}}
                <div class="form-group col-md-12">
                    <div class="input-group has-validation">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nome</div>
                        </div>
                        <input type="text"
                               class="form-control @error('nome') is-invalid @enderror"
                               name="nome" id="nome"
                               value="{{old('nome')}}" />
                        <div class="invalid-feedback">@error('nome') {{$message}} @enderror</div>
                    </div>
                </div>
            </div>
            {{--Bio--}}
            <div class="row m-2">
                <div class="form-group has-validation">
                    <label for="bio" class="text-dark-emphasis fw-semibold h3">Biografia</label>
                    <textarea class="form-control text-start"
                              name="bio" id="bio" rows="10">{{old('bio')}}</textarea>
                    <div class="invalid-feedback">@error('bio') {{$message}} @enderror</div>
                </div>
            </div>
            {{--Botões--}}
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Inserir</button>
                    <a href="{{route('admin.autores.index')}}" class="btn btn-danger"><i
                            class="fa-solid fa-ban"></i> Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
