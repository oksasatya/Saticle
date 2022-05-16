<div class="row d-flex justify-content-center ">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5 text-center">Edit form User</h4>
                <form class="forms-sample" action="{{ route('admin.manage-users.update', $user->id) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" value="{{ old('name') ? old('name') : $user->name }}" name="name">
                        <x-validate-name></x-validate-name>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Email" value="{{ old('email') ? old('email') : $user->email }}" name="email">
                        <x-validate-email></x-validate-email>
                    </div>
                    {{-- <div class="form-group">
                        Current avatar: <br>
                        @if ($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar" width="120px">
                            <br>
                        @else
                            No Avatar <br><br>
                        @endif
                        <label>Avatar</label>
                        <input type="file" name="avatar" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary"
                                    type="button">Upload</button>
                            </span>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="roles">Roles</label>
                        <select class="form-control @error('roles') is-invalid @enderror" id="roles" name="roles">
                            {{-- foreach role --}}
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                                    {{ $role->name }}</option>
                            @endforeach
                            <x-validate-role></x-validate-role>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            placeholder="Phone Number" value="{{ old('phone') ? old('phone') : $user->phone }}"
                            name="phone">
                        <x-validate-phone></x-validate-phone>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
