@extends('layouts.base',
    ['breadcrumbTitle' => 'Sensors',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="card p-3">
            <div id="vue-sensor-table"></div>
        </div>
    </div>
@endsection
