<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('calcAverage')}}">Weather (current)</a>
            </li>
        </ul>
    </div>
</nav>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Plaats</th>
            <th scope="col">Temperatuur</th>
            <th scope="col">Gevoelstemperatuur</th>
            <th scope="col">Vochtigheid</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($weather_data as $weather)
        <tr>
            <th scope="row">{{$weather->id}}</th>
            <td>{{$weather->city}}</td>
            <td>{{$weather->temperature}}°C</td>
            <td>{{$weather->feels}}°C</td>
            <td>{{$weather->humidity}}%</td>
        </tr>
        @endforeach
    </tbody>
</table>
<table class="table">

    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Gemiddelde Temperatuur</th>
            <th scope="col">Gemiddelde Gevoelstemperatuur</th>
            <th scope="col">Gemiddelde Vochtigheid</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"></th>
            <td></td>
            <td>{{$avg_temp}}°C</td>
            <td>{{$avg_feels}}°C</td>
            <td>{{$avg_hum}}%</td>
        </tr>
    </tbody>
</table>
</ <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>