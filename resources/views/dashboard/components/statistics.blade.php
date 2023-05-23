<div class="card flat-card">
    <div class="row-table">
        <div class="col-sm-6 card-body br">
            @include('partials.statistic_slot',[
                'icon' => '<i class="material-icons-two-tone text-primary mb-1">group</i>',
                'value' => '1000',
                'title' => 'Customers'
            ])
        </div>
        <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
            @include('partials.statistic_slot',[
                'icon' => '<i class="material-icons-two-tone text-primary mb-1">language</i>',
                'value' => '$1252',
                'title' => 'Revenue'
            ])
        </div>
        <div class="col-sm-6 card-body">
            @include('partials.statistic_slot',[
                'icon' => '<i class="material-icons-two-tone text-primary mb-1">unarchive</i>',
                'value' => '600',
                'title' => 'Growth'
            ])
        </div>
    </div>
    <div class="row-table">
        <div class="col-sm-6 card-body br">
            @include('partials.statistic_slot',[
                'icon' => '<i class="material-icons-two-tone text-primary mb-1">swap_horizontal_circle</i>',
                'value' => '3550',
                'title' => 'Returns'
            ])
        </div>
        <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
            @include('partials.statistic_slot',[
                'icon' => '<i class="material-icons-two-tone text-primary mb-1">cloud_download</i>',
                'value' => '3550',
                'title' => 'Downloads'
            ])
        </div>
        <div class="col-sm-6 card-body">
            @include('partials.statistic_slot',[
                'icon' => '<i class="material-icons-two-tone text-primary mb-1">shopping_cart</i>',
                'value' => '100%',
                'title' => 'Order'
            ])
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        @include('dashboard.components.conversion')
    </div>
    <div class="col-md-6">
        @include('dashboard.components.delivered')
    </div>
</div>

