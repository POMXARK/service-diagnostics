{{-- sections --}}
@section('base')
<script src="{{ mix('/js/manifest.js') }}"></script>
@show

@section('bootstrap')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script >
        // инициализация всплывающих окон
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('jquery')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('scrollbar')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('fonts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        feather.replace()
    </script>
@endsection

{{-- pages --}}

@switch($page)
    @case('home')
        {{-- bootstrap cdn --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script>
            // инициализация всплывающих окон
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        </script>
        @section('scrollbar') @show
        @section('fonts') @show
        {{-- app --}}
{{--        TODO: сделать прелоадер document.querySelector('.loader-bg').remove()--}}
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script type="module" src="{{ mix('js/pcoded.js') }}"></script>
        @break
    @case('graphs')
        @section('bootstrap') @show
        {{-- jquery --}}
        @section('jquery') @show
        @section('scrollbar') @show
        @section('fonts') @show
        {{-- vue --}}
        <script src="{{ mix('/js/axios.js') }}"></script>
        <script src="{{ mix('/js/vue.js') }}"></script>
        <script src="{{ mix('js/vue-graphs.js') }}"></script>
        {{-- app --}}
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script type="module" src="{{ mix('js/pcoded.js') }}"></script>
        @break
    @case('dashboard')
        @section('bootstrap') @show
        {{-- jquery --}}
        @section('scrollbar') @show
        @section('fonts') @show
        <script src="{{ mix('/js/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script src="{{ mix('js/pcoded.js') }}"></script>
        <script src="{{ mix('js/dashboard-sale.js') }}"></script>
        @break
    @case('table')
        @section('bootstrap') @show
        {{-- jquery --}}
        @section('scrollbar') @show
        <script src="{{ mix('/js/jquery.js') }}"></script>
        {{-- datatables - bootstrap --}}
        <script src="{{ mix('/js/bootstrap.js') }}"></script>
        <script src="{{ mix('/js/datatables.js') }}"></script>
        {{-- vue --}}
        <script src="{{ mix('/js/axios.js') }}"></script>
        <script src="{{ mix('/js/vue.js') }}"></script>
        <script type="module" src="{{ mix('/js/vue-table.js') }}"></script>
        @section('fonts') @show
        {{-- app --}}
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="{{ mix('js/pcoded.js') }}"></script>
        @break
    @case('basic')
        @section('bootstrap') @show
        @section('scrollbar') @show
        @section('fonts') @show
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script src="{{ mix('js/pcoded.js') }}"></script>
        @break
    @case('maps')
        @section('bootstrap') @show
        @section('scrollbar') @show
        @section('fonts') @show

        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script src="{{ mix('js/pcoded.js') }}"></script>
        {{-- Google Map --}}
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
        @break
    @case('charts')
        @section('bootstrap') @show
        @section('scrollbar') @show
        @section('fonts') @show
        <script src="{{ mix('/js/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script src="{{ mix('js/pcoded.js') }}"></script>
        <script src="{{ mix('js/chart-apex.js') }}"></script>
        @break
@endswitch
