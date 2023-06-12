<div id="footer-bar" class="footer-bar footer-bar-detached">
    @auth
    <x-bottom-nav-item :active="request()->routeIs('dashboard')" href="{{route('dashboard')}}">
        <i class="bi bi-house-fill font-15"></i>
        <span>Home</span>
    </x-bottom-nav-item>
    @endauth
    @guest
    <x-bottom-nav-item :active="request()->routeIs('home')" href="{{route('home')}}">
        <i class="bi bi-house-fill font-15"></i>
        <span>Home</span>
    </x-bottom-nav-item>
    @endguest
    <a href="#"><i class="bi bi-box font-17"></i><span>Product</span></a>
    <a href="#"><i class="bi bi-cart3 font-16"></i><span>Penjualan</span></a>
    <x-bottom-nav-item :active="request()->routeIs('profile.index')" href="{{route('profile.index')}}">
        <i class="bi bi-person-circle font-15"></i>
        <span>profile</span>
    </x-bottom-nav-item>
</div>
