<div class="header-bar header-fixed header-app header-bar-detached">
    <a href="{{route('dashboard')}}">
        <img class="m-3" src="/assets/images/logo.png" height="25px" class="sisella-logo" /></a>

    @auth
    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-main"
        class="header-title text-end color-theme font-14">
        {{auth()->user()->name}}
        <img class="m-3 rounded-circle border border-2" src="{{auth()->user()->profile_photo_url}}"
            data-src="{{auth()->user()->profile_photo_url}}" alt="img" height="30px" />
    </a>
    @endauth

</div>
