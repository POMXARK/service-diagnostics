<!DOCTYPE html>
{{--идеальные условия--}}
<html lang="en">

<head>
{{--    @include('layouts/head')--}}
{{--    @include('layouts/head-bottom-link')--}}
    <link href="/css/feather.css" rel="stylesheet">
    <link href="/css/material.css" rel="stylesheet">

    {{-- крайне долгая загрузка нужно оптимизировать!!! --}}
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
{{--@include('layouts/layout-vertical')--}}
<div class="pc-container">
    <div class="card p-3">
    <div id="chart" style="width: 80%; height:  80%"></div>
    </div>
</div>

{{--проблемы с навигационной панелью--}}
{{--<script type="module" src="/js/app.js"></script>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="jquery_modules/js/plugins/feather.min.js"></script>
<script type="module" src="jquery_modules/js/pcoded.min.js"></script>
<script type="module" src="jquery_modules/js/pages/dashboard-sale.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    var options = {
    chart: {
        type: 'line'
        },
    series: [],
        xaxis: {
        categories: []
        },
        stroke: {
        show: true,
            curve: 'smooth',
            lineCap: 'butt',
            colors: undefined,
            width: 1,
            dashArray: 0,
        },
        dataLabels: {
        enabled: true,
        },
        colors: ['#77B6EA', '#545454','#F44336', '#E91E63', '#9C27B0', '#98CE00', '#16E0BD',  '#78C3FB', '#89A6FB', '#98838F'],
        toolbar: {
        show: true
        },
        dropShadow: {
        enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
        },
        // OK
        height: 350,
        type: 'line',
    }

    let categoriesArr = ['06.22.2022','06.23.2022', '06.24.2022', '06.25.2022', '06.26.2022',
    '06.27.2022', '06.28.2022', '06.29.2022', '06.30.2022', '07.01.2022',
    '07.02.2022', '07.03.2022', '07.04.2022', '07.05.2022', '07.06.2022',
    '07.07.2022', '07.08.2022', '07.09.2022', '07.10.2022', '07.11.2022',
    '07.12.2022', '07.13.2022', '07.14.2022', '07.15.2022']

    let dataset_apex_arr = [
        {
            name: 'date',
            data: ['06.22.2022','06.23.2022', '06.24.2022', '06.25.2022', '06.26.2022',
            '06.27.2022', '06.28.2022', '06.29.2022', '06.30.2022', '07.01.2022',
            '07.02.2022', '07.03.2022', '07.04.2022', '07.05.2022', '07.06.2022',
            '07.07.2022', '07.08.2022', '07.09.2022', '07.10.2022', '07.11.2022',
            '07.12.2022', '07.13.2022', '07.14.2022', '07.15.2022'
        ]
        },
        {
            name: "mode",
            data: ["35","36","37","38","39","40","41","42","43","44","45","46",
            "47","48","49","50","51","52","53","54","55","56","57","58"
        ]
        },
        {
            name: "ai1",
            data: ['40', '78', '27', '62', '67', '81', '14', '94', '13', '26', '47', '75', '36', '11', '42', '82', '58', '56', '46', '94', '15', '67', '63', '79']
        },
        {
            name: "ai2",
            data: ['31', '45', '1', '73', '49', '29', '81', '91', '37', '59', '2', '81', '44', '78', '13', '57', '44', '12', '76', '65', '39', '35', '26', '18']
        },
        {
            name: "ai3",
            data: ['90', '25', '15', '27', '75', '4', '17', '10', '38', '20', '71', '30', '50', '69', '26', '46', '80', '2', '33', '99', '80', '30', '16', '83']
        },
        {
            name: "ai4",
            data: ['93', '80', '31', '15', '72', '1', '9', '18', '63', '26', '97', '99', '58', '55', '3', '80', '86', '49', '25', '82', '38', '57', '19', '8']
        },
        {
            name: "ai5",
            data: ['81', '29', '83', '1', '77', '88', '93', '8', '10', '94', '22', '83', '86', '38', '90', '66', '78', '14', '30', '13', '28', '92', '74', '26']
        },
        {
            name: "ai6",
            data: ['59', '38', '81', '27', '48', '87', '31', '77', '70', '21', '85', '3', '81', '70', '68', '29', '69', '63', '28', '98', '92', '48', '3', '20']
        },
        {
            name: "ai7",
            data: ['22', '35', '33', '74', '71', '30', '27', '9', '40', '39', '53', '69', '2', '79', '80', '57', '62', '26', '7', '42', '30', '99', '18', '82']
        },
        {
            name: "ai8",
            data: ['48', '18', '75', '90', '75', '20', '57', '89', '69', '66', '39', '13', '95', '79', '23', '80', '20', '52', '46', '23', '26', '88', '50', '5']
        },
        {
            name: "ai9",
            data: ['55', '14', '19', '20', '16', '13', '90', '47', '45', '69', '37', '75', '13', '64', '97', '88', '79', '34', '74', '23', '34', '59', '13', '86']
        },
        {
            name: "ai10",
            data: ['55', '51', '88', '9', '30', '9', '21', '6', '79', '58', '38', '62', '79', '1', '46', '90', '29', '54', '94', '2', '39', '2', '97', '17']
        }
    ]

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    chart.updateOptions({
        series: dataset_apex_arr,
        xaxis: {
    categories: categoriesArr
        }
    })


</script>
</body>
</html>
