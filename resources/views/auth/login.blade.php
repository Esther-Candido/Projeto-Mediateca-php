@extends('templates.main')
@section('title','Login')
@section('content')
    @if($errors->any())
        {{--Mensagem de erro do topo--}}
        <div class="row p-2">
            <div class="alert alert-danger" role="alert">
                Verifique os dados inseridos
                <ul>
                    @foreach($errors->all() as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row justify-content-center m-4">
        <div class="col-6">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input value="{{old('email')}}" type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Entrar</button>
            </form>
        </div>

    </div>

@endsection
