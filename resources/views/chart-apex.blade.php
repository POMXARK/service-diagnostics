<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    @include('layouts/head-bottom-link')
</head>
@include('layouts/layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Apex Chart</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Chart</a></li>
                            <li class="breadcrumb-item">Apex Chart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
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
</div>
<!-- [ Main Content ] end -->
@include('layouts/footer')

<script type="module" src="{{ asset('jquery_modules/js/plugins/apexcharts.min.js') }}"></script>
<script type="module" src="{{ asset('jquery_modules/js/pages/dashboard-sale.js') }}"></script>

</body>
</html>