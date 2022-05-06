<form method="POST" action="{{ route('login') }}" class="login-form" autocomplete="off">
    @csrf
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center "><span class="fa fa-user"></span>
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

    <div class="form-group d-md-flex my-2">
        @if (Route::has('password.request'))
            <div class="w-100 text-md-end">
                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password</a>
            </div>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn form-control btn-secondary rounded submit px-3">{{ __('login') }}</button>
    </div>
</form>
