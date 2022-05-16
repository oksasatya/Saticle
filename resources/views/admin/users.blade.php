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
                        <x-admin.manage-user.table-user></x-admin.manage-user.table-user>
                    </div>
                </div>
            </div>
            <x-admin.footer></x-admin.footer>
        </div>
    @endsection
</x-layouts.admin>
