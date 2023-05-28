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
    @case('forms')
        @section('bootstrap') @show
        @section('scrollbar') @show
        @section('fonts') @show
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script src="{{ mix('js/pcoded.js') }}"></script>
        @break
    @case('icon-father')
        @section('bootstrap') @show
        @section('scrollbar') @show
        @section('fonts') @show
        @section('jquery') @show
        <script>
            var iconlist = ['alert-octagon', 'alert-circle', 'activity', 'alert-triangle', 'align-center', 'airplay', 'align-justify', 'align-left', 'align-right', 'arrow-down-left',
                'arrow-down-right', 'anchor', 'aperture', 'arrow-left', 'arrow-right', 'arrow-down', 'arrow-up-left', 'arrow-up-right', 'arrow-up', 'award', 'bar-chart', 'at-sign',
                'bar-chart-2', 'battery-charging', 'bell-off', 'battery', 'bluetooth', 'bell', 'book', 'briefcase', 'camera-off', 'calendar', 'bookmark', 'box', 'camera',
                'check-circle', 'check', 'check-square', 'cast', 'chevron-down', 'chevron-left', 'chevron-right', 'chevron-up', 'chevrons-down', 'chevrons-right', 'chevrons-up',
                'chevrons-left', 'circle', 'clipboard', 'chrome', 'clock', 'cloud-lightning', 'cloud-drizzle', 'cloud-rain', 'cloud-off', 'codepen', 'cloud-snow', 'compass', 'copy',
                'corner-down-right', 'corner-down-left', 'corner-left-down', 'corner-left-up', 'corner-up-left', 'corner-up-right', 'corner-right-down', 'corner-right-up', 'cpu', 'credit-card',
                'crosshair', 'disc', 'delete', 'download-cloud', 'download', 'droplet', 'edit-2', 'edit', 'external-link', 'eye', 'feather', 'facebook', 'file-minus',
                'eye-off', 'fast-forward', 'file-text', 'film', 'file', 'file-plus', 'folder', 'filter', 'flag', 'globe', 'grid', 'heart', 'home', 'github', 'image',
                'inbox', 'layers', 'info', 'instagram', 'layout', 'link-2', 'life-buoy', 'link', 'log-in', 'list', 'lock', 'log-out', 'loader', 'mail', 'maximize-2',
                'map', 'map-pin', 'menu', 'message-circle', 'message-square', 'minimize-2', 'mic-off', 'minus-circle', 'mic', 'minus-square', 'minus', 'moon', 'monitor',
                'more-vertical', 'more-horizontal', 'move', 'music', 'navigation-2', 'navigation', 'octagon', 'package', 'pause-circle', 'pause', 'percent', 'phone-call',
                'phone-forwarded', 'phone-missed', 'phone-off', 'phone-incoming', 'phone', 'phone-outgoing', 'pie-chart', 'play-circle', 'play', 'plus-square', 'plus-circle', 'plus',
                'pocket', 'printer', 'power', 'radio', 'repeat', 'refresh-ccw', 'rewind', 'rotate-ccw', 'refresh-cw', 'rotate-cw', 'save', 'search', 'server', 'scissors',
                'share-2', 'share', 'shield', 'settings', 'skip-back', 'shuffle', 'sidebar', 'skip-forward', 'slack', 'slash', 'smartphone', 'square', 'speaker', 'star',
                'stop-circle', 'sun', 'sunrise', 'tablet', 'tag', 'sunset', 'target', 'thermometer', 'thumbs-up', 'thumbs-down', 'toggle-left', 'toggle-right', 'trash-2', 'trash',
                'trending-up', 'trending-down', 'triangle', 'type', 'twitter', 'upload', 'umbrella', 'upload-cloud', 'unlock', 'user-check', 'user-minus', 'user-plus', 'user-x',
                'user', 'users', 'video-off', 'video', 'voicemail', 'volume-x', 'volume-2', 'volume-1', 'volume', 'watch', 'wifi', 'x-square', 'wind', 'x', 'x-circle',
                'zap', 'zoom-in', 'zoom-out', 'command', 'cloud', 'hash', 'headphones', 'underline', 'italic', 'bold', 'crop', 'help-circle', 'paperclip', 'shopping-cart',
                'tv', 'wifi-off', 'minimize', 'maximize', 'gitlab', 'sliders'
            ];

            for (var i = 0, l = iconlist.length; i < l; i++) {

                $('#icon-wrapper').append(
                    '<div class="i-block" data-filter="' + iconlist[i] + '"  data-toggle="tooltip" title="' + iconlist[i] + '">' +
                    '<i data-feather="' + iconlist[i] + '"></i>' +
                    '</div>');
            }
            $("#icon-search").on("keyup", function() {
                var g = $(this).val().toLowerCase();
                $(".i-main .i-block").each(function() {
                    var t = $(this).attr('data-filter');
                    if (t) {
                        var s = t.toLowerCase();
                    }
                    if (s) {
                        var n = s.indexOf(g);
                        if (n !== -1) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                });
            });
        </script>
        <script type="module" src="{{ mix('js/sidebar.js') }}"></script>
        <script src="{{ mix('js/pcoded.js') }}"></script>
        @break
@endswitch
