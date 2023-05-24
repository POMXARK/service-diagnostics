@extends('layouts.base',
    ['breadcrumbTitle' => 'Dashboard sale',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Feather</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Icons</a></li>
                            <li class="breadcrumb-item">Feather icon</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ feather-icon ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Feather Icon</h5>
                        <p>Use svg icon with <code>&lt;i data-feather="&lt;&lt; Copyed code &gt;&gt;"&gt;</code> in you
                            html code</p>
                    </div>
                    <div class="card-body text-center">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <input type="text" id="icon-search" class="form-control mb-4" placeholder="search . . ">
                            </div>
                        </div>
                        <div class="i-main" id="icon-wrapper"></div>
                    </div>
                </div>
            </div>
            <!-- [ feather-icon ] end -->
        </div>
        <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/jquery.js') }}"></script>
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script src="{{ mix('/js/axios.js') }}"></script>
    <script src="{{ mix('js/perfect-scrollbar.js') }}"></script>
    <script src="{{ mix('/js/vue.js') }}"></script>
    <script type="module" src="{{ mix('/js/vue-sidebar.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('js/pcoded.js') }}"></script>
@endsection
