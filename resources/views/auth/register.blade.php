<x-guest-layout>
    <div class="header-bar header-fixed header-app header-bar-detached">
        <a data-back-button href="#"><i class="bi bi-caret-left-fill font-11 color-theme ps-2"></i></a>
        <a href="{{route('login')}}" class="header-title color-theme font-13">Back to Login</a>
    </div>
    <div class="page-content header-clear-medium">
        <div class="card card-style">
            <div class="content">
                <h1 class="text-center font-400 font-30 mb-2">Buat Akun</h1>
                <p class="text-center font-13 mt-n2 mb-3">
                    Daftar dan kelola penjualan kamu sekarang
                </p>
                <form method="POST" class="demo-animation m-0" action="{{ route('register') }}">
                    @csrf
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi bi-person-circle font-14"></i>
                        <x-text-input id="name" class="form-control rounded-xs {{$errors->get('name')?'is-invalid':''}}" type="text" name="name"
                            :value="old('name')" pattern="[A-Za-z ]{1,32}" autofocus autocomplete="off" />
                        <x-input-label for="name" class="color-theme" :value="__('Nama Lengkap')" />
                        <x-input-invalid :message="$errors->first('name')" class="invalid-feedback" />
                        <x-input-valid :message="'Excellent!'" class="valid-feedback" />
                        <span>(required)</span>
                    </div>
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi bi-at font-16"></i>
                        <x-text-input id="email" class="form-control rounded-xs {{$errors->get('email')?'is-invalid':''}}" type="email" name="email"
                            :value="old('email')" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" />
                        <x-input-label for="email" class="color-theme" :value="__('Your Email')" />
                        <x-input-invalid :message="$errors->first('email')" class="invalid-feedback" />
                        <x-input-valid :message="'Email address looks good!'" class="valid-feedback" />
                        <span>(required)</span>
                    </div>
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi bi-asterisk font-12"></i>
                        <x-text-input id="password" class="form-control rounded-xs {{$errors->get('password')?'is-invalid':''}}" type="password" name="password"
                            :value="old('password')" autocomplete="off" />
                        <x-input-label for="password" class="color-theme" :value="__('Your Password')" />
                        <x-input-invalid :message="$errors->first('password')" class="invalid-feedback" />
                        <x-input-valid :message="' Password address looks good!'" class="valid-feedback" />
                        <span>(required)</span>
                    </div>
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi bi-telephone-fill font-12"></i>
                        <x-text-input id="phone" class="form-control rounded-xs {{$errors->get('phone')?'is-invalid':''}}" type="text" name="phone"
                            :value="old('phone')" pattern="[+ 0-9]{10,15}" autocomplete="off" />
                        <x-input-label for="phone" class="color-theme" :value="__('Your Phone')" />
                        <x-input-invalid :message="$errors->first('phone')" class="invalid-feedback" />
                        <x-input-valid :message="'Phone Number looks good!'" class="valid-feedback" />
                        <span>(required)</span>
                    </div>

                    <x-primary-button class="btn btn-full gradient-blue shadow-bg shadow-bg-s rounded-sm text-uppercase font-700 w-100 btn-s mt-4 mb-3">
                        {{ __('Kirim') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
