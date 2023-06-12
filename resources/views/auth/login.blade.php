<x-guest-layout>
    <!-- Header -->
    @include('layouts.navigation')


    <div class="page-content header-clear-medium">

        <x-widget.sliders></x-widget.sliders>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card card-style">
                <div class="content">
                    <h1 class="text-center font-800 font-30 mb-2">Sign In</h1>
                    <p class="text-center font-13 mt-n2 mb-3">Enter your Credentials</p>
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi bi-person-circle font-14"></i>
                        <x-text-input id="email" class="form-control rounded-xs" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" placeholder="62" />
                        <x-input-label for="email" class="color-theme" :value="__('Nomor HP atau Email')" />
                    </div>
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi bi-asterisk font-12"></i>
                        <x-text-input id="password" class="form-control rounded-xs" type="password" name="password"
                            required autocomplete="current-password" placeholder="Password" />
                        <x-input-label for="password" class="color-theme" :value="__('Kata Sandi')" />
                    </div>
                    <x-primary-button
                        class="btn rounded-sm btn-m gradient-blue text-uppercase font-700 mt-4 mb-3 btn-full shadow-bg shadow-bg-s w-100">
                        {{ __('Masuk') }}
                    </x-primary-button>
                    <div class="d-flex">
                        @if (Route::has('password.request'))
                        <div>
                            <a href="{{ route('password.request') }}" class="color-theme opacity-30 font-12">Lupa
                                Password</a>
                        </div>
                        @endif
                        <div class="ms-auto">
                            <a href="{{route('register')}}" class="color-theme opacity-30 font-12">Buat Akun</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</x-guest-layout>
