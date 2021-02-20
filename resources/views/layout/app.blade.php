<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trip Monitor</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">


    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Bevan') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            //const uluru = { lat: -25.344, lng: 131.036 };
            const uluru = { lat: {{ $geo[0] }}, lng: {{ $geo[1] }} };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>
</head>

<body style="background-color: rgba(135, 206, 235, 1); background-image: url('{{ asset('img/bg.jpg') }}'); background-size: cover;">
<nav class="navbar navbar-light navbar-expand-md" style="background-color: #ff0000;">
    <div class="container-fluid"><a class="navbar-brand" href="#" style="font-family: 'Open Sans', sans-serif;color: rgba(255,255,255,0.9);">Trip Monitor</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #ffffff;">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: #ffffff;">Search</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #ffffff;">Add</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdFKLBeQfygXfuzSbCNoXdvvdorieYJo8&callback=initMap&libraries=&v=weekly"
    async
>

</script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/main-js.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
