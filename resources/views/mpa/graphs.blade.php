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
    @include('partials.js_includes', ['page' => 'graphs'])
@endsection
