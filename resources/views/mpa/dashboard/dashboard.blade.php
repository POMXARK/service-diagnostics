@extends('layouts.base',
    ['breadcrumbTitle' => 'Dashboard sale',
    'to'               => '/',
    'toName'           => 'Home'
    ]
)
@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- support-section start -->
        <div class="col-xl-6 col-md-12">
            @include('mpa.dashboard.statistics')
        </div>
        <div class="col-xl-6 col-md-12">
            @include('mpa.dashboard.total_sales')
        </div>
        <!-- support-section end -->
        <!-- customer-section start -->
        <div class="col-xl-6 col-md-12">
            @include('mpa.dashboard.satisfaction')
            @include('mpa.dashboard.new_products')
        </div>
        <div class="col-xl-6 col-md-12">
            @include('mpa.dashboard.sales')
            @include('mpa.dashboard.feeds')
        </div>
        <!-- customer-section end -->
    </div>
    <!-- [ Main Content ] end -->
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
