<x-apps-layout>
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Selamat Datang di Perpustas (Sistem Perpustakaan Tasikmalaya)</h3>
                <p>Daftar Buku</p>
            </div>
            <div class="row">
    @foreach ($books as $item)
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-stretch">
            <div class="member">
                <div class="member-img">
                    <img src="{{ asset($item->thumbnail) }}" class="img-fluid" style="width: 180px; height: 250px;" alt="">
                </div>
                <div class="member-info">
                    <h4>{{ $item->name }}</h4>
                    <span style="color: black">{!! Str::limit(strip_tags($item->desc_book), 50) !!}</span>
                </div>
                <a href="/detail/{{ Crypt::encrypt($item->id) }}" class="stretched-link"></a>
            </div>
        </div>
    @endforeach
</div>



        </div>
    </section>
</x-apps-layout>
