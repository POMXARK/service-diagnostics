<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    @include('layouts/head-bottom-link')
</head>
<body>
@include('layouts/layout-vertical')
@php($faker = Faker\Factory::create('en_US'))
<div class="pc-container ">
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

</body>

</html>
