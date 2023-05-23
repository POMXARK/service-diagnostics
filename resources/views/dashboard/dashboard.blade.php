@extends('layouts.base',
    ['breadcrumbTitle' => 'Dashboard sale',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- support-section start -->
        <div class="col-xl-6 col-md-12">
            @include('dashboard.components.statistics')
        </div>
        <div class="col-xl-6 col-md-12">
            @include('dashboard.components.graph_sales')
        </div>
        <!-- support-section end -->
        <!-- customer-section start -->
        <div class="col-xl-6 col-md-12">
            @include('dashboard.components.satisfaction')
            @include('dashboard.components.new_products')
        </div>
        <div class="col-xl-6 col-md-12">
            @include('dashboard.components.sales')
            @include('dashboard.components.feeds')
        </div>
        <!-- customer-section end -->
    </div>
    <!-- [ Main Content ] end -->
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
