<x-navbar>
</x-navbar>
<x-layouts.app>
    @section('content')
        <section class="hero">
            <x-carousel></x-carousel>
        </section>
        <section class="dark">
            <div class="container py-4">
                <h1 class="h1 text-center text-white mb-4" id="pageHeaderTitle">My Article Card</h1>
                <x-card></x-card>
            </div>
        </section>
    @endsection
</x-layouts.app>
