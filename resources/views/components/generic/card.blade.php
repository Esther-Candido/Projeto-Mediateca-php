<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">{{$titulo}}</h3>
    </div>

    <div class="card-body p-0">
        {{$slot}}
    </div>

    @isset($footer)
        <div class="card-footer">
            {{$footer}}
        </div>
    @endisset

</div>
