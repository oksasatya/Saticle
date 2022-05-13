<x-layouts.admin>
    @section('content')
        <div class="container-scroller">
            <!-- partial -->
            <x-admin.navbar></x-admin.navbar>
            <div class="container-fluid page-body-wrapper">
                <x-admin.sidebar></x-admin.sidebar>
                <x-admin.dashboard.main-dashboard></x-admin.dashboard.main-dashboard>
            </div>

            <x-admin.footer></x-admin.footer>
        </div>
    @endsection
</x-layouts.admin>
