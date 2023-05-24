@extends('layouts.base',
    ['breadcrumbTitle' => 'Apex Chart',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ variant-chart ] start -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Basic line chart</h5>
                </div>
                <div class="card-body">
                    <div id="line-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Area chart</h5>
                </div>
                <div class="card-body">
                    <div id="area-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Bar chart</h5>
                </div>
                <div class="card-body">
                    <div id="bar-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Bar chart horizontal</h5>
                </div>
                <div class="card-body">
                    <div id="bar-chart-3"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Pie Charts</h5>
                </div>
                <div class="card-body">
                    <div id="pie-chart-1" style="width:100%"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Pie Charts donut</h5>
                </div>
                <div class="card-body">
                    <div id="pie-chart-2" style="width:100%"></div>
                </div>
            </div>
        </div>
        <!-- [ variant-chart ] end -->

    </div>
    <!-- [ Main Content ] end -->
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script src="{{ mix('/js/axios.js') }}"></script>
    <script src="{{ mix('js/perfect-scrollbar.js') }}"></script>
    <script src="{{ mix('/js/vue.js') }}"></script>
    <script type="module" src="{{ mix('/js/vue-sidebar.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('js/pcoded.js') }}"></script>
@endsection
