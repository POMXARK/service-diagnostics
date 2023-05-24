@extends('layouts.base',
    ['breadcrumbTitle' => 'Graphs',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="card p-3">
            <div id="vue-graphs"></div>
        </div>
    </div>
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
    <script type="module" src="{{ mix('js/vue-graphs.js') }}"></script>
@endsection
