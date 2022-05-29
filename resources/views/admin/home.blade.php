<x-layouts.admin>
    @section('content')
        <div class="container-scroller">
            <!-- partial -->
            <x-admin.navbar></x-admin.navbar>
            <div class="container-fluid page-body-wrapper">
                <x-admin.sidebar></x-admin.sidebar>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <x-layouts.page-header>
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </x-layouts.page-header>
                        <div class="row">
                            <div class="col-md-4 stretch-card grid-margin">
                                <div class="card bg-gradient-danger card-img-holder text-white">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/images/dashboard/circle.svg') }}"
                                            class="card-img-absolute" alt="circle-image" />
                                        <h4 class="font-weight-normal mb-3">Total Users <i
                                                class="mdi mdi-account-check mdi-24px float-end"></i>
                                        </h4>
                                        <h2 class="mb-5">{{ $user->count() }}</h2>
                                        @if ($user->count() > 0)
                                            <h6 class="card-text">Last Created user
                                                {{ $user->first()->created_at->diffforhumans() }}
                                            </h6>
                                        @else
                                            <h6 class="card-text">Last Created user
                                                {{ $user->created_at->diffforhumans() }}</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 stretch-card grid-margin">
                                <div class="card bg-gradient-info card-img-holder text-white">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/images/dashboard/circle.svg') }}"
                                            class="card-img-absolute" alt="circle-image" />
                                        <h4 class="font-weight-normal mb-3">Total Post <i
                                                class="mdi mdi-book-open-page-variant mdi-24px float-end"></i>
                                        </h4>
                                        <h2 class="mb-5">{{ $posts->count() }}</h2>
                                        {{-- show latest created post --}}
                                        @if ($posts->count() > 0)
                                            <h6 class="card-text">Latest Post
                                                {{ $posts->first()->created_at->diffforhumans() }}</h6>
                                        @else
                                            <h6 class="card-text">No Post Created Yet</h6>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 stretch-card grid-margin">
                                <div class="card bg-gradient-success card-img-holder text-white">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/images/dashboard/circle.svg') }}"
                                            class="card-img-absolute" alt="circle-image" />
                                        <h4 class="font-weight-normal mb-3">Visitors Online <i
                                                class="mdi mdi-diamond mdi-24px float-end"></i>
                                        </h4>
                                        {{-- show online user --}}
                                        <h2 class="mb-5">{{ $online }}</h2>
                                        @if ($last_online == null)
                                            <h6 class="card-text">No user online</h6>
                                        @else
                                            <h6 class="card-text">Last user online
                                                {{ $last_online->created_at->diffforhumans() }}</h6>
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
                                        <h4 class="card-title">Management Tag</h4>
                                        <div id="message" class="message"></div>
                                        {{-- send post with ajax --}}
                                        {{-- use form with validation bootstrap was validated --}}
                                        <form action="{{ route('admin.tag.store') }}" name="form-tag" id="form-tag">
                                            {{-- input type hidden token --}}
                                            @csrf
                                            <div class="mb-4 d-flex">
                                                <input type="text" class="form-control me-4" name="name" id="name" required
                                                    placeholder="Add New Tag">
                                                <button type="submit"
                                                    class="btn btn-gradient-primary font-weight-bold todo-list-add-btn">Add</button>
                                            </div>
                                        </form>
                                        <table class="table table-bordered " id="tag-table">
                                            <thead class="table-success">
                                                <tr id="tag-row">
                                                    <th> Tags Name </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody class="tag-row">
                                                @foreach ($tags as $tag)
                                                    <tr>
                                                        <td>
                                                            <p class="text-primary">{{ $tag->name }}</p>
                                                        </td>
                                                        <td>
                                                            {{-- {{-- form for delete button --}}
                                                            <form action="{{ route('admin.tag.destroy', $tag->id) }}"
                                                                method="POST" id="form-delete-tag-{{ $tag->id }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-gradient-danger btn-sm font-weight-bold delete-tag"
                                                                    {{-- mdi delete i class --}} data-id="{{ $tag->id }}">
                                                                    <i class="mdi mdi-delete"></i> Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                @endforeach
                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin">
                                @include('admin.dashboard.recent-user')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <x-admin.footer></x-admin.footer>
        </div>
    @endsection
</x-layouts.admin>
