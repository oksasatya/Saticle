<x-layouts.page-header>
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
    </span> Management User
</x-layouts.page-header>
<div class="row">
    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Roles </th>
                            <th> Status </th>
                            <th> Action </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            @if ($loop->iteration % 5 == 1)
                                <tr class="table-info">
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }} </td>
                                    {{-- phone null --}}
                                    @if ($user->phone == null)
                                        <td class="text-primary">
                                            Null
                                        </td>
                                    @else
                                        <td> {{ $user->phone }} </td>
                                    @endif
                                    {{-- get role name --}}
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </td>
                                    {{-- get user online --}}
                                    <td>
                                        @if ($user->isOnline())
                                            <span class="badge badge-success"> Online </span>
                                        @else
                                            <span class="badge badge-danger"> Offline </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.manage-users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    data-bs-customClass="primary-tooltip"><i class="mdi mdi-pencil"></i>
                                                </button>
                                            </a>
                                            <a class="text-white" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $user->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    data-bs-toggle="tooltip" {{-- modal --}}
                                                    data-bs-placement="top" title="Delete"
                                                    data-bs-customClass="danger-tooltip"><i class="mdi mdi-delete">
                                                    </i>
                                                </button>
                                            </a>
                                            {{-- modal delete --}}
                                            @include('admin.modal.modal-delete')
                                            </button>
                                            <a class="text-white"
                                                href="{{ route('admin.manage-users.show', $user->id) }}">
                                                <button type="button" class="btn btn-success btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                            @elseif ($loop->iteration % 5 == 2)
                                <tr class="table-warning">
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }} </td>
                                    {{-- phone null --}}
                                    @if ($user->phone == null)
                                        <td class="text-primary">
                                            Null
                                        </td>
                                    @else
                                        <td> {{ $user->phone }} </td>
                                    @endif
                                    {{-- get role name --}}
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </td>
                                    {{-- get user online --}}
                                    <td>
                                        @if ($user->isOnline())
                                            <span class="badge badge-success"> Online </span>
                                        @else
                                            <span class="badge badge-danger"> Offline </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.manage-users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    data-bs-customClass="primary-tooltip"><i class="mdi mdi-pencil"></i>
                                                </button>
                                            </a>
                                            <a class="text-white" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $user->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    data-bs-toggle="tooltip" {{-- modal --}}
                                                    data-bs-placement="top" title="Delete"
                                                    data-bs-customClass="danger-tooltip"><i class="mdi mdi-delete">
                                                    </i>
                                                </button>
                                            </a>
                                            {{-- modal delete --}}
                                            @include('admin.modal.modal-delete')
                                            </button>
                                            <a class="text-white"
                                                href="{{ route('admin.manage-users.show', $user->id) }}">
                                                <button type="button" class="btn btn-success btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @elseif($loop->iteration % 5 == 3)
                                <tr class="table-danger">
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }} </td>
                                    {{-- phone null --}}
                                    @if ($user->phone == null)
                                        <td class="text-primary">
                                            Null
                                        </td>
                                    @else
                                        <td> {{ $user->phone }} </td>
                                    @endif
                                    {{-- get role name --}}
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </td>
                                    {{-- get user online --}}
                                    <td>
                                        @if ($user->isOnline())
                                            <span class="badge badge-success"> Online </span>
                                        @else
                                            <span class="badge badge-danger"> Offline </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.manage-users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    data-bs-customClass="primary-tooltip"><i class="mdi mdi-pencil"></i>
                                                </button>
                                            </a>
                                            <a class="text-white" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $user->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    data-bs-toggle="tooltip" {{-- modal --}}
                                                    data-bs-placement="top" title="Delete"
                                                    data-bs-customClass="danger-tooltip"><i class="mdi mdi-delete">
                                                    </i>
                                                </button>
                                            </a>
                                            {{-- modal delete --}}
                                            @include('admin.modal.modal-delete')
                                            </button>
                                            <a class="text-white"
                                                href="{{ route('admin.manage-users.show', $user->id) }}">
                                                <button type="button" class="btn btn-success btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @elseif($loop->iteration % 5 == 4)
                                <tr class="table-success">
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }} </td>
                                    {{-- phone null --}}
                                    @if ($user->phone == null)
                                        <td class="text-primary">
                                            Null
                                        </td>
                                    @else
                                        <td> {{ $user->phone }} </td>
                                    @endif
                                    {{-- get role name --}}
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </td>
                                    {{-- get user online --}}
                                    <td>
                                        @if ($user->isOnline())
                                            <span class="badge badge-success"> Online </span>
                                        @else
                                            <span class="badge badge-danger"> Offline </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.manage-users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    data-bs-customClass="primary-tooltip"><i class="mdi mdi-pencil"></i>
                                                </button>
                                            </a>
                                            <a class="text-white" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $user->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    data-bs-toggle="tooltip" {{-- modal --}}
                                                    data-bs-placement="top" title="Delete"
                                                    data-bs-customClass="danger-tooltip"><i class="mdi mdi-delete">
                                                    </i>
                                                </button>
                                            </a>
                                            {{-- modal delete --}}
                                            @include('admin.modal.modal-delete')
                                            </button>
                                            <a class="text-white"
                                                href="{{ route('admin.manage-users.show', $user->id) }}">
                                                <button type="button" class="btn btn-success btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                <tr class="table-primary">
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }} </td>
                                    {{-- phone null --}}
                                    @if ($user->phone == null)
                                        <td class="text-primary">
                                            Null
                                        </td>
                                    @else
                                        <td> {{ $user->phone }} </td>
                                    @endif
                                    {{-- get role name --}}
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </td>
                                    {{-- get user online --}}
                                    <td>
                                        @if ($user->isOnline())
                                            <span class="badge badge-success"> Online </span>
                                        @else
                                            <span class="badge badge-danger"> Offline </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.manage-users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    data-bs-customClass="primary-tooltip"><i class="mdi mdi-pencil"></i>
                                                </button>
                                            </a>
                                            <a class="text-white" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $user->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    data-bs-toggle="tooltip" {{-- modal --}}
                                                    data-bs-placement="top" title="Delete"
                                                    data-bs-customClass="danger-tooltip"><i class="mdi mdi-delete">
                                                    </i>
                                                </button>
                                            </a>
                                            {{-- modal delete --}}
                                            @include('admin.modal.modal-delete')
                                            </button>
                                            <a class="text-white"
                                                href="{{ route('admin.manage-users.show', $user->id) }}">
                                                <button type="button" class="btn btn-success btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
