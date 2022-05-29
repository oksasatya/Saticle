<x-guestnavbar></x-guestnavbar>
<x-layouts.app>
    @section('content')
        <section class="ftco-section ftco-no-pb" autofocus="off">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap py-4">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(img/bg.jpg);"></div>
                            <h3 class="text-center mb-0">Welcome</h3>
                            <p class="text-center">Sign Up by entering the information below</p>
                            <x-formregis></x-formregis>
                            <div class="w-100 text-center mt-4 text">
                                <p class="mb-0 ">already have an account?</p>
                                <a href="{{ route('login') }}" class="text-decoration-none">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layouts.app>
