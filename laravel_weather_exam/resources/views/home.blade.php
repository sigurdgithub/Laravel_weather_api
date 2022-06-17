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
                    <a class="nav-link" href="{{route ('calcAverage')}}">Weather</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="row-flex">
        <form method="POST" action=" {{route('save')}} " <div class="row-flex">
            @csrf
            <input type="hidden" name="temperature" value="{{$weather->main->temp}}" />
            <input type="hidden" name="city" value="{{$weather->name}}" />
            <input type="hidden" name="feels" value="{{$weather->main->feels_like}}" />
            <input type="hidden" name="humidity" value="{{$weather->main->humidity}}" />
            @isset($weather)
            <section class="vh-100" style="background-color: #4B515D;">
                <div class="container py-5 h-100">

                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-8 col-lg-6 col-xl-4">

                            <div class="card" style="color: #4B515D; border-radius: 35px;">
                                <div class="card-body p-4">

                                    <div class="d-flex">
                                        <h6 class="flex-grow-1">{{$weather->name}}</h6>
                                        <h6>Vandaag</h6>
                                    </div>

                                    <div class="d-flex flex-column text-center mt-5 mb-4">
                                        <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;">
                                            {{$weather->main->temp}}°C </h6>
                                        <span class="small" style="color: #868B94">Voelt aan als:
                                            {{$weather->main->feels_like}}°C</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1" style="font-size: 1rem;">
                                            <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span
                                                    class="ms-1"> {{$weather->main->humidity}}% </span>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            @endisset($weather)
        </form>
    </div>
    <div>
    </div>
</div>

</div>
</div>

</div>
</div>

</div>
</section>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>