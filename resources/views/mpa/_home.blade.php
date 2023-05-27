@extends('layouts.base',
    ['breadcrumbTitle' => 'Home',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)

@section('content')
    @php($faker = Faker\Factory::create('en_US'))
    <div class="row">
        <div class="card p-3">
            <table class="table table-hover">
                <thead>
                <tr class="align-top">
                    <th scope="col">Наименование системы</th>
                    <th scope="col">Наименование датчика</th>
                    <th scope="col">Статус</th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 30; $i++)
                    <tr>
                        <td>{{ $faker->realText(10) }}</td>
                        <td>{{ $faker->realText(10) }}</td>
                        <td>{{ $faker->realText(10) }}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    @include('partials.js_includes', ['page' => 'home'])
@show


