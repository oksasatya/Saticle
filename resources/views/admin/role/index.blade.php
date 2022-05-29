<x-layouts.admin>
    <x-layouts.page-header>
        <h3>
            <i class="mdi mdi-account-key"></i>
            Manage Role
        </h3>
        <div class="page-header-actions">
            <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
                data-original-title="Add new Role">
                <i class="mdi mdi-plus"></i>
            </button>
        </div>
    </x-layouts.page-header>
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
                    </div>
                </div>
            </div>
            <x-admin.footer></x-admin.footer>
        </div>
    @endsection
</x-layouts.admin>
