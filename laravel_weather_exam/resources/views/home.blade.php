<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/weather">Weather</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row-flex">
        <form method="POST" action=" {{route('save')}} " <div class="row-flex">
            <input type="hidden" name="temperature" value="{{$weather->main->temp}}" />
            <input type="hidden" name="city" value="{{$weather->name}}" />
            <input type="hidden" name="feels" value="{{$weather->main->feels_like}}" />
            <input type="hidden" name="humidity" value="{{$weather->main->humidity}}" />
            @csrf
            @isset($weather)
            <h3>Weer in {{$weather->name}}</h3>
            <h4>Vandaag</h4>
            <div class="col-2">

                <p>Temperatuur: {{$weather->main->temp}}°C</p>
                <p>Voelt aan als: {{$weather->main->feels_like}}°C</p>
            </div>
            <div class="col-2">
                <p>Vochtigheid: {{$weather->main->humidity}}%</p>
            </div>
            @endisset($weather)
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>