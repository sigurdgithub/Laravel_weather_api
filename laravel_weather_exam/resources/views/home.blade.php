<div class="container">
    <div class="row-flex">
        <div class="col-3">
            <h1>HOME PAGE</h1>
        </div>
    </div>
    <form method="POST" action="{{-- {{route('save')}} --}}" <div class="row-flex">
        @isset($weather)
        <div class="col" {{$weather->main->temp}}
            <hr>
            {{$weather->main->temp}}
        </div>
        @endisset($weather)
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>