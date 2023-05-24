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
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/jquery.js') }}"></script>
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script src="{{ mix('/js/axios.js') }}"></script>
    <script src="{{ mix('js/perfect-scrollbar.js') }}"></script>
    <script src="{{ mix('/js/vue.js') }}"></script>
    <script type="module" src="{{ mix('/js/vue-sidebar.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('js/pcoded.js') }}"></script>
@show
{{--    <script type="module" src="{{ mix('/js/app.js') }}"></script>--}}
{{--    <script type="module" src="{{ mix('js/mpa/all-files.js') }}"></script>--}}

{{--    mix.extract(['jquery'],'js/jquery.js')--}}
{{--    mix.extract(['vue-loader','vue', '@vue', 'vue3-ico'],'js/vue.js')--}}
{{--    mix.extract(['css-loader','style-loader', 'bootstrap', '@popperjs/core/lib'],'js/bootstrap.js')--}}
{{--    mix.extract(['axios'],'js/axios.js')--}}
{{--    mix.extract(['perfect-scrollbar'],'js/perfect-scrollbar.js')    --}}


