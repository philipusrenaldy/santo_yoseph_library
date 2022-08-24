@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection

@section('content')

<div class="card m-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#menu1">Simple Search</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#menu3">Help</a>
        </li>
    </ul>
    <div class="tab-content m-3">
        <div id="menu1" class="tab-pane fade">
            <!-- Simple search -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" placeholder="Keywords" />
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-primary justify-content-between ">
                    <i class="fas fa-search"></i>Search
                </button>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <p>Cara penelusuran dokumen, ketik kata kunci (judul, pengarang, subjek atau ringkasan) tekan 'enter' atau
                klik tombol pencarian. Sistem akan menampilkan dokumen-dokumen yang sesuai dengan kata kunci yang
                diberikan.
            </p>
            <!-- <p>
                Pencarian menggunakan metode boolean OR, jika ingin mencari dokumen yang mengandung semua kata yang
                dicari, gunakanlah boolean AND. Selain AND dan OR, juga penelusuran dapat menggunakan NOT. Untuk
                penelusuran boolean, penulisan AND, OR dan NOT harus dengan huruf kapital. Metode pencarian yang lain
                adalah 'fuzzy query', dengan cara menambahkan karakter ~ diakhir kata dan 'wildcard query' dengan *
                (bintang) dan ? (tanda tanya. Pencarian tidak case sensitive, jadi 'buku tulis' dan 'Buku TULIS' akan
                menghasilkan output yang sama.
            </p> -->

            <h5>Kategori yang dapat dipakai untuk pencarian</h5>
            <br>

            <h6>Judul</h6>
            <p>Pencarian judul, contoh 'judul: buku'</p>
            <br>

            <h6>Pengarang</h6>
            <p>Pencarian pengarang, contoh 'pengarang: budi'</p>
            <br>

            <h6>Penerbitan</h6>
            <p>Pencarian penerbit (termasuk nama, lokasi serta tahun terbit), contoh 'penerbitan: depok'</p>
            <br>

            <h6>Subjek</h6>
            <p>Pencarian subjek, contoh 'subjek: data'</p>
            <br>

            <h6>Abstrak</h6>
            <p>Pencarian abstrak/ringkasan, contoh 'abstrak: air'</p>
            <br>

            <h6>Abstrak</h6>
            <p>Pencarian abstrak/ringkasan, contoh 'abstrak: air'</p>
            <br>

            <h6>Kategori</h6>
            <p>Kategori dapat digabungkan dengan metode pencarian, sehingga dapat dibuat kata pencarian yang kompleks,
                seperti:
                'judul: data AND pengarang: budi~ AND penerbit: depok OR penerbit: salemba NOT pengolahan'</p>
            <br>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $(".nav-tabs a").click(function() {
        $(this).tab('show');
    });
    $(".dropdown-toggle").dropdown();
});
</script>

@endsection

@section('footer')
@parent
@endsection