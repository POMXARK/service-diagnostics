<link href="/css/app.css" rel="stylesheet">
<link href="/css/feather.css" rel="stylesheet">
<link href="/css/fontawesome.css" rel="stylesheet">
<link href="/css/material.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">

<script type="module" src="/js/app.js"></script>
<script src="jquery_modules/js/plugins/feather.min.js"></script>
{{--Обработчик бокового меню--}}
<script type="module" src="jquery_modules/js/pcoded.min.js"></script>
<script type="module" src="jquery_modules/js/pages/dashboard-sale.js"></script>
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.js"></script>

<script>
    // инициализация всплывающих окон
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>






