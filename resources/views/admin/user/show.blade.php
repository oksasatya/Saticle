<x-layouts.admin>
    @section('content')
        <div class="container-scroller">
            <!-- partial -->
            <x-admin.navbar></x-admin.navbar>
            <div class="container-fluid page-body-wrapper">
                <x-admin.sidebar></x-admin.sidebar>
                <div class="main-panel">
                    <div class="content-wrapper">
                        @if (session('status'))
                            <x-success-alert></x-success-alert>
                        @endif
                        <div class="row">
                            {{-- create show user --}}
                            <div class="col-md-8 grid-margin stretch-card">
                                <div class="card" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            @if ($users->avatar == null)
                                                <img src="{{ 'https://source.unsplash.com/random/400x600' }}"
                                                    class="img-fluid rounded-start" alt="...">
                                            @else
                                                <img src="{{ asset('storage/' . $users->avatar) }}"
                                                    class="img-fluid rounded-start" alt="...">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h4 class="card-title text-center mb-4">Show User</h4>
                                                <h5 class="text-primary">Name : {{ $users->name }}</h5>
                                                <h5>Email : {{ $users->email }}</h5>
                                                {{-- get roles name --}}
                                                <h5>Roles :
                                                    @foreach ($users->roles as $role)
                                                        <span class="badge  badge-primary">
                                                            {{ $role->name }}</span>
                                                    @endforeach
                                                </h5>

                                                @if ($users->isonline())
                                                    <h5>Status : <span class="badge badge-success"> Online </span> </h5>
                                                @else
                                                    <h5>Status : <span class="badge badge-danger"> Offline </span> </h5>
                                                @endif
                                                {{-- date format --}}
                                                <h5>Created at : {{ $users->created_at->format('d M Y') }}</h5>
                                                <h5>Updated at : {{ $users->updated_at->format('d M Y') }}</h5>
                                                @if ($users->phone == null)
                                                    <h5>Phone : <span class="text-primary">Null</span></h5>
                                                @else
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-admin.footer></x-admin.footer>
        @endsection
</x-layouts.admin>
