
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{--    Load compiled CSS    --}}
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

</head>
<body>
    <diw class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title"
                        data-bs-content="And here's some amazing content. It's very engaging. Right?">
                    Click to toggle popover
                </button>
            </div>
        </div>
    </diw>
    <script src="/js/app.js"></script>

{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>--}}

    <p data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" data-bs-trigger="hover" class="d-inline-block">
        Service Ports
    </p>

    <script>

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })

    </script>
</body>
</html>
