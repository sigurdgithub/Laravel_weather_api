<div class="container">
    <div class="row-flex">
        <div class="col-3">
            <h1>HOME PAGE</h1>
        </div>
    </div>
    <form method="POST" action="{{route('save')}}" <div class="row-flex">
        @isset($weather_genk)
        @foreach ($weather_genk as $weather_gen)
        {{$weather_gen->weather}}
        <hr>
        {{$weather_gen->main}}
</div>
@endforeach
@endisset($weather_genk)
<button type="submit" class="btn btn-primary">Save</button>
</form>
</div>