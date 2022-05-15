<form method="POST" action="{{ route('register') }}" class="login-form" autocomplete="off">
    @csrf
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center "><span class="fa fa-user"></span>
        </div>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name"
            required autocomplete="off" autofocus>
        <x-validate-email></x-validate-email>
    </div>
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center "><span class="fa fa-envelope"></span>
        </div>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"
            required autocomplete="off" autofocus>
        <x-validate-email></x-validate-email>
    </div>
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
            required autocomplete="off" name="password">
        <x-validate-password></x-validate-password>
    </div>
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span>
        </div>
        <input type="password" class="form-control" placeholder="Confirm-Password" required autocomplete="off"
            name="password_confirmation">
    </div>
    <div class="form-group">
        <button type="submit"
            class="btn form-control btn-secondary rounded submit px-3 mt-3">{{ __('Register') }}</button>
    </div>
</form>
