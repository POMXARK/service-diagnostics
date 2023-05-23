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
