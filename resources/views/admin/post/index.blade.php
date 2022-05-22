<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <div class="float-end">
                            <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
                                <i class="mdi mdi-plus"></i>
                                Add New
                            </a>
                        </div>
                        <x-layouts.page-header>
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-book-open-page-variant"></i>
                            </span>Management Posts
                        </x-layouts.page-header>
                        {{-- create button add in right corner --}}

                        <div class="row">
                            <div class="col-lg-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-primary table-post">
                                            <thead>
                                                <tr>
                                                    <th> Title </th>
                                                    <th> Body </th>
                                                    <th> Author </th>
                                                    <th> Status </th>
                                                    <th> Date Create </th>
                                                    <th> Action </th>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function() {
        var table = $('.table-post').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.post.datatable') }}',
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'content',
                    name: 'content'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'status',
                    name: 'Status'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.table-post').on('click', '.btn-delete', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = url;
                    }
                });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.table-post').on('click', '.btn-edit', function(e) {

            e.preventDefault();
            var url = $(this).attr('href');
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#title').val(response.title);
                    $('#content').val(response.content);
                    $('#author').val(response.author);
                    $('#status').val(response.status);
                    $('#id').val(response.id);
                    $('#form-edit').attr('action', url);
                    $('#modal-edit').modal('show');
                }
            });

        });

    })
</script>
