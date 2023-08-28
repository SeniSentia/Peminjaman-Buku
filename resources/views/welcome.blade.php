<x-apps-layout>
    
    <section id="team" class="team section-bg">
    
              

        <div class="container" data-aos="fade-up">
        <div class="dropdown" id="category-dropdown">
    <button class="btn dropdown-toggle" type="button" style="background: #DEC26F; color: white;width:100%;padding25px"id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Kategori Buku
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background: #DEC26F; color: white; width:100%;padding25px">
        @foreach ($categories as $category)
            <a class="dropdown-item"  href="/kategori/{{ $category->id }}" data-value="{{ $category->id }}">
                {{ $category->name_category }}
            </a>
        @endforeach
    </div>
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
    document.addEventListener('DOMContentLoaded', function() {
        const categoryDropdown = document.getElementById('category-dropdown');
        const categoryForm = document.getElementById('category-form');

        categoryDropdown.addEventListener('change', (event) => {
            categoryForm.submit();
        });
    });
</script>
<!-- Include jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>