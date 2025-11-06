@extends('layouts.app')
@section('title', 'Artikel')

@section('body_class', 'page-articles')

@section('content')

  <section class="art-hero" style="background-image:url('{{ asset('images/pexels-photo-3184296.jpeg') }}')">
    <div class="mw">
      <span class="art-badge">TIPS</span>
      <h1 class="art-title">
        Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
      </h1>
    </div>
  </section>

  <section class="art-feature">
    <div class="mw">
      <div class="art-feature-grid">
        <a href="#" class="feat-card">
          <div class="img16x9" style="--img:url('{{ asset('images/korona.png') }}')"></div>
          <h3 class="feat-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
          <div class="feat-meta">Selasa, 18 Feb 2020 12:01 WIB</div>
        </a>

        <a href="#" class="feat-card">
          <div class="img16x9" style="--img:url('{{ asset('images/htw.png') }}')"></div>
          <h3 class="feat-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
          <div class="feat-meta">Selasa, 18 Feb 2020 12:01 WIB</div>
        </a>
      </div>
    </div>
  </section>

  {{-- ===== EXCERPT di bawah 2 kartu ===== --}}
<section class="art-feature-excerpt">
  <div class="mw">
    <div class="art-feature-grid">
      <div class="feat-copy">
        <p class="feat-excerpt">
          Panduan ringkas tentang jalur beasiswa, dokumen, dan tips praktis agar proses aplikasi kuliah ke luar negeri jadi lebih mudah.
        </p>
      </div>
      <div class="feat-copy">
        <p class="feat-excerpt">
          Sorotan kampus mitra dan pengalaman belajar yang bisa jadi referensi buat kamu sebelum menentukan tujuan studi.
        </p>
      </div>
    </div>
  </div>
</section>

<br>
<br>
{{-- ===== ARTIKEL TERBARU (5 baris) ===== --}}
<section class="art-latest-list">
  <div class="mw">
    <h2 class="art-section-title">ARTIKEL TERBARU</h2>

    <ul class="art-rows">
      <li>
        <a href="#" class="row">
          <div class="row-thumb" style="--img:url('{{ asset('images/artikel1.jpg') }}')"></div>
          <div class="row-body">
            <h3 class="row-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <div class="row-meta">Selasa, 18 Feb 2020 12:01 WIB</div>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="row">
          <div class="row-thumb" style="--img:url('{{ asset('images/artikel2.jpg') }}')"></div>
          <div class="row-body">
            <h3 class="row-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <div class="row-meta">Selasa, 18 Feb 2020 12:01 WIB</div>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="row">
          <div class="row-thumb" style="--img:url('{{ asset('images/artikel3.jpg') }}')"></div>
          <div class="row-body">
            <h3 class="row-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <div class="row-meta">Selasa, 18 Feb 2020 12:01 WIB</div>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="row">
          <div class="row-thumb" style="--img:url('{{ asset('images/artikel4.jpg') }}')"></div>
          <div class="row-body">
            <h3 class="row-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <div class="row-meta">Selasa, 18 Feb 2020 12:01 WIB</div>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="row">
          <div class="row-thumb" style="--img:url('{{ asset('images/nurse2.jpg') }}')"></div>
          <div class="row-body">
            <h3 class="row-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <div class="row-meta">Selasa, 18 Feb 2020 12:01 WIB</div>
          </div>
        </a>
      </li>
    </ul>

    <nav class="art-pagination" aria-label="Pagination">
      <span class="nav-arrow" aria-hidden="true">&larr;</span>
      <a href="#" class="active" aria-current="page">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <span class="nav-arrow" aria-hidden="true">&rarr;</span>
    </nav>
  </div>
</section>
<br>
<br>
<br>
@endsection
