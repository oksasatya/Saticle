<div class="card">
    <div class="card-body">
        <h4 class="card-title">Recent User</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> Roles </th>
                        <th> Status </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{-- generate random image  from unsplash --}}
                                @if ($user->avatar == null)
                                    <img src="https://source.unsplash.com/NYyCqdBOKwc/60x60" class="me-2"
                                        alt="image">
                                    {{ $user->name }}
                                @else
                                    <img src="{{ asset('/storage' . $user->avatar) }}" class="me-2"
                                        alt="image">
                                    {{ $user->name }}
                                @endif
                            </td>
                            <td> {{ $user->email }} </td>
                            @if ($user->phone == null)
                                <td class="text-primary">
                                    Null
                                </td>
                            @else
                                <td> {{ $user->phone }} </td>
                            @endif
                            <td>
                                @foreach ($user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            </td>
                            <td>
                                @if ($user->isOnline())
                                    <span class="badge badge-success"> Online </span>
                                @else
                                    <span class="badge badge-danger"> Offline </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
