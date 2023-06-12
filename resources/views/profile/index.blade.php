<x-app-layout>
    <div class="card card-style mt-3">
        <div class="content">
            <div class="d-flex pb-2">
                <div class="align-self-center">
                    <img class="rounded-circle border border-2" src="{{auth()->user()->profile_photo_url}}"
            data-src="{{auth()->user()->profile_photo_url}}" alt="img" height="50px" />

                </div>
                <div class="align-self-center">
                    <h5 class="ps-3 color-highlight font-13 mb-n1">{{$user->email}}</h5>
                    <h4 class="ps-3 mb-0">{{$user->name}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style shadow-l">
        <div class="content">
            <div class="row mb-0 text-center">
                <div class="col-4">
                    <h1 class="mb-n1 mt-2">351</h1>
                    <p class="font-10 mb-n1 pb-0">Point</p>
                </div>
                <div class="col-4">
                    <h1 class="mb-n1 mt-2">193</h1>
                    <p class="font-10 mb-n1 pb-0">Produk</p>
                </div>
                <div class="col-4">
                    <h1 class="mb-n1 mt-2">615</h1>
                    <p class="font-10 mb-n1 pb-0">Reseller</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-2">
            <div class="list-group list-custom list-group-m rounded-xs list-group-flush">
                <a href="#" class="list-group-item">
                    <div>Daftar Transaksi</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a href="#" class="list-group-item">
                    <div>Riwayat Poin</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a href="#" class="list-group-item">
                    <div>Daftar Alamat</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a href="#" class="list-group-item">
                    <div>Daftar Reseller</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a href="#" class="list-group-item">
                    <div>Toko Saya</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a href="#" class="list-group-item">
                    <div>Pengaturan</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="px-15 mt-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{route('logout')}}" class="btn mx-3 mb-4 btn-full btn-margins gradient-red shadow-bg shadow-bg-s rounded-s btn-m text-uppercase font-900"  onclick="event.preventDefault();
            this.closest('form').submit();">LOG OUT</a>
        </form>
    </div>

    <section class="panel-space"></section>
</x-app-layout>
