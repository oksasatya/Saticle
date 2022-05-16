<div class="row">
    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Management Users</h4>
                </p>
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
                                            <button type="button" class="btn btn-primary btn-sm"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                data-bs-customClass="primary-tooltip"><a class="text-white"
                                                    href="{{ route('admin.manage-users.edit', $user->id) }}"><i
                                                        class="mdi mdi-pencil"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="tooltip"
                                                {{-- modal --}} data-bs-placement="top" title="Delete"
                                                data-bs-customClass="danger-tooltip"><a class="text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $user->id }}"><i
                                                        class="mdi mdi-delete">
                                                    </i>
                                                </a>
                                            </button>
                                            {{-- modal delete --}}
                                            @include('admin.modal.modal-delete')
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                        </div>
                                    </td>

                                </tr>
                            @elseif ($loop->iteration % 5 == 2)
                                <tr class="table-warning">
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Flash </td>
                                    <td> $245.30 </td>
                                    <td> July 1, 2015 </td>
                                </tr>
                            @elseif($loop->iteration % 5 == 3)
                                <tr class="table-danger">
                                    <td> 3 </td>
                                    <td> John Richards </td>
                                    <td> Premeire </td>
                                    <td> $138.00 </td>
                                    <td> Apr 12, 2015 </td>
                                </tr>
                            @elseif($loop->iteration % 5 == 4)
                                <tr class="table-success">
                                    <td> 4 </td>
                                    <td> Peter Meggik </td>
                                    <td> After effects </td>
                                    <td> $ 77.99 </td>
                                    <td> May 15, 2015 </td>
                                </tr>
                            @else
                                <tr class="table-primary">
                                    <td> 5 </td>
                                    <td> Edward </td>
                                    <td> Illustrator </td>
                                    <td> $ 160.25 </td>
                                    <td> May 03, 2015 </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
