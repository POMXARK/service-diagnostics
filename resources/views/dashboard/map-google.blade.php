@extends('layouts.base',
    ['breadcrumbTitle' => 'Dashboard sale',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Google Map</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="#!">Maps</a></li>
                        <li class="breadcrumb-item">Google Maps</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ basic-map ] start -->
        <div class="col-lg-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5>Basic</h5>
                    <span class="d-block m-t-5">Map shows places around the world</span>
                </div>
                <div class="card-body">
                    <div id="basic-map" class="set-map" style="height:400px;"></div>
                </div>
            </div>
        </div>
        <!-- [ basic-map ] end -->
        <!-- [ Markers-map ] start -->
        <div class="col-lg-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5>Markers</h5>
                    <span class="d-block m-t-5">Maps shows <code>location</code> of the place</span>
                </div>
                <div class="card-body">
                    <div id="markers-map" class="set-map" style="height:400px;"></div>
                </div>
            </div>
        </div>
        <!-- [ Markers-map ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- google-map Js -->

    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/jquery.js') }}"></script>
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script src="{{ mix('/js/axios.js') }}"></script>
    <script src="{{ mix('js/perfect-scrollbar.js') }}"></script>
    <script src="{{ mix('/js/vue.js') }}"></script>
    <script type="module" src="{{ mix('/js/vue-sidebar.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('js/pcoded.js') }}"></script>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.9/gmaps.min.js" integrity="sha512-7L86NChc+1jvCKJVMLGnoQLA9QQXVcBvWyr37YaVau42A6zWacZ/ew7EX2eag+ruzEVKeqdLS0pSYgj1yagegA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // [ basic maps ]
        var basic;
        basic = new GMaps({
            el: '#basic-map',
            lat: 21.217319,
            lng: 72.866472,
            scrollwheel: false
        });
        // [ Gmaps ]
        var map;
        map = new GMaps({
            el: '#markers-map',
            lat: 21.2334329,
            lng: 72.866472,
            scrollwheel: false
        });
        // [ Add-marker map ]
        map.addMarker({
            lat: 21.2334329,
            lng: 72.866472,
            title: 'Marker with InfoWindow',
            infoWindow: {
                content: '<p><Phoenicoded></Phoenicoded> <br/> Buy Now at <a href="">Themeforest</a></p>'
            }
        });
    </script>

@endsection
