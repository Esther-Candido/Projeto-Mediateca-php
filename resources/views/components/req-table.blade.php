<table class="table table-striped">
    <thead>
    <tr>
        <th style="width: 10px">#</th>
        <th>Obra</th>
        <th>User</th>
        <th>Requisitada</th>
        <th>Entregue</th>
    </tr>
    </thead>
    <tbody>
    @foreach($requisicoes as $req)
        <tr>
            <td>{{$req->id}}</td>
            <td>{{$req->obra}}</td>
            <td>{{$req->user}}</td>
            <td>{{$req->created_at}}</td>
            @if($req->aberta)
                <form method="POST" action="#">
                    @csrf
                    @method('PUT')
                    <td><button type="submit" class="badge bg-danger">Entregar</button></td>
                </form>
            @else
                <td>{{$req->updated_at}}</td>
            @endif

        </tr>
    @endforeach
    </tbody>
</table>
