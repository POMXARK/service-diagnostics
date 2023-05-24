<link rel="preload" href="/fonts/material.woff2" as="font" type="font/woff2" crossorigin>
<link href="{{ mix('/css/style.css') }}" rel="stylesheet">
<link href="{{ mix('/css/material.css') }}" rel="stylesheet">
<link href="{{ mix('/css/feather.css') }}" rel="stylesheet">
{{--<link href="/css/fontawesome.css" rel="stylesheet">--}}



{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" />--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />--}}

<script src="{{ mix('/js/manifest.js') }}"></script>
{{--<script src="{{ mix('/js/vendor.js') }}"></script>--}}
<script type="module" src="{{ mix('/js/app.js') }}"></script>
{{--Обработчик бокового меню--}}
{{--<script type="module" src="{{ mix('js/mpa/all-files.js') }}"></script>--}}
{{--<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.js"></script>--}}

<script>
    // инициализация всплывающих окон
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>






