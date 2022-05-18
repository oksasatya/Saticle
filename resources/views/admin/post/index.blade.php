<x-layouts.admin>
    @section('content')
        <div class="container-scroller">
            <x-admin.navbar></x-admin.navbar>
            <div class="container-fluid page-body-wrapper">
                <x-admin.sidebar></x-admin.sidebar>
                <div class="main-panel">
                    <div class="content-wrapper">
                        @if (session('status'))
                            <x-success-alert></x-success-alert>
                        @endif
                        <x-layouts.page-header>
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-book-open-page-variant"></i>
                            </span>Management Posts
                        </x-layouts.page-header>
                        <div class="row">
                            <div class="col-lg-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-primary">
                                            <thead>
                                                <tr>
                                                    <th> Title </th>
                                                    <th> Body </th>
                                                    <th> Author </th>
                                                    <th> Image </th>
                                                    <th> Published </th>
                                                    <th> Tag </th>
                                                    <th> Date Create </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-admin.footer></x-admin.footer>
        </div>
    @endsection
</x-layouts.admin>
