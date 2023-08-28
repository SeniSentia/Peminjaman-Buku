<x-apps-layout>
    
    <section id="team" class="team section-bg">
    
              

        <div class="container" data-aos="fade-up">
        <div style="background: #DEC26F; color: white; background-repeat: no-repeat; padding:20px;background-position: right center;">
                Menampilkan Buku dengan Kategori
                @if ($selectedCategory)
                    : {{ $selectedCategory->name_category }}
                @endif
            </div>

            <p>
       <!--     <div class="section-title">
                <h3>Selamat Datang di Perpustas (Sistem Perpustakaan Tasikmalaya)</h3>
                <p>Daftar Buku</p>
            </div> -->
            <div class="row">
    @foreach ($books as $item)
        <div class="col-6 col-lg-3 d-flex align-items-stretch">
        <a href="/detail/{{ Crypt::encrypt($item->id) }}" style="color:white;">
            <div class="member">
                <div class="member-img">
               
                    <img src="{{ asset($item->thumbnail) }}" class="img-fluid" style="width: 180px; height: 220px;border-radius: 14px; " alt="">
                    
                </div>
                <h5>{{ $item->name }}</h5></a>
              
            </div>
        </div>
    @endforeach
</div>



        </div>
    </section>
</x-apps-layout>

<script>
    $(document).ready(function () {
        // Inisialisasi komponen dropdown Bootstrap
        $('.dropdown-toggle').dropdown();
    });
</script>
