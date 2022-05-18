<x-layouts.page-header>
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
    </span> Dashboard
</x-layouts.page-header>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                    alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Users <i class="mdi mdi-account-check mdi-24px float-end"></i>
                </h4>
                <h2 class="mb-5">{{ $user->count() }}</h2>
                @if ($user->count() > 0)
                    <h6 class="card-text">Last Created user {{ $user->first()->created_at->diffforhumans() }}
                    </h6>
                @else
                    <h6 class="card-text">Last Created user {{ $user->created_at->diffforhumans() }}</h6>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                    alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Post <i
                        class="mdi mdi-book-open-page-variant mdi-24px float-end"></i>
                </h4>
                <h2 class="mb-5">{{ $posts->count() }}</h2>
                {{-- show latest created post --}}
                @if ($posts->count() > 0)
                    <h6 class="card-text">Latest Post {{ $posts->first()->created_at->diffforhumans() }}</h6>
                @else
                    <h6 class="card-text">No Post Created Yet</h6>
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                    alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-end"></i>
                </h4>
                {{-- show online user --}}
                <h2 class="mb-5">{{ $online }}</h2>
                @if ($last_online == null)
                    <h6 class="card-text">No user online</h6>
                @else
                    <h6 class="card-text">Last user online {{ $last_online->created_at->diffforhumans() }}</h6>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                    <div id="visit-sale-chart-legend"
                        class="rounded-legend legend-horizontal legend-top-right float-end"></div>
                </div>
                <canvas id="visit-sale-chart" class="mt-4"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Traffic Sources</h4>
                <canvas id="traffic-chart"></canvas>
                <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 grid-margin">
        <x-admin.dashboard.recent-user></x-admin.dashboard.recent-user>
    </div>
</div>
