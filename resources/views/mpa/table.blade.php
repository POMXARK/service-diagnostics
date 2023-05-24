@extends('layouts.base',
    ['breadcrumbTitle' => 'Table',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
    <div class="row">
        <div class="card p-3">
            <div id="vue-table"></div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/jquery.js') }}"></script>
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script src="{{ mix('/js/datatables.js') }}"></script>
    <script src="{{ mix('/js/axios.js') }}"></script>
    <script src="{{ mix('js/perfect-scrollbar.js') }}"></script>
    <script src="{{ mix('/js/vue.js') }}"></script>
    <script type="module" src="{{ mix('/js/vue-sidebar.js') }}"></script>
    <script type="module" src="{{ mix('/js/vue-table.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('js/pcoded.js') }}"></script>
@endsection
