<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    @include('layouts/head-bottom-link')
</head>
@include('layouts/layout-vertical')
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
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
    </div>
</section>

<!-- [ Main Content ] end -->
@include('layouts/footer')
<!-- google-map Js -->

{{--<script type="module" src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>--}}
{{--<script type="module" src="http://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>--}}
{{--<script type="module" src="../jquery_modules/js/plugins/gmaps.min.js"></script>--}}
{{--<script type="module" src="../jquery_modules/js/pages/google-maps.js"></script>--}}

</body>
</html>
