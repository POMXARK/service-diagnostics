<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @section('styles')
        {{-- fonts cdn --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/material-icons@1.13.7/iconfont/material-icons.min.css" rel="stylesheet">
        {{-- app --}}
        <link href="{{ mix('/css/style.css') }}" rel="stylesheet">
    @show
</head>

<!-- [ auth ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        @section('content')
                        @show
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth ] end -->

@section('scripts')
@show

</body>
</html>
