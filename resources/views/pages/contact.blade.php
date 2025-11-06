@extends('layouts.app')
@section('title','Hubungi Kami')
@section('body_class','hide-contact-footer')

@section('content')
<main class="page-contact">

  <section class="ct-hero" style="background-image:url('{{ asset('images/becak.png') }}')">
    <div class="ct-hero__overlay"></div>
    <div class="ct-container">
      <h1 class="ct-hero__title">HUBUNGI KAMI</h1>
    </div>
  </section>

  {{-- ===== Form ===== --}}
  <section class="ct-form-wrap">
    <div class="ct-container">

      <h2 class="ct-form-title">KIRIM PESAN</h2>

      <form class="ct-form" action="#" method="post">
        @csrf

        <div class="ct-grid">
          <div class="ct-field">
            <label>Nama*</label>
            <input type="text" name="name" placeholder="Nama lengkap Anda">
          </div>

          <div class="ct-field">
            <label>E-Mail*</label>
            <input type="email" name="email" placeholder="Alamat E-mail Anda">
          </div>

          <div class="ct-field">
            <label>Perusahaan / Organisasi</label>
            <input type="text" name="company" placeholder="Nama Perusahaan / organisasi">
          </div>

          <div class="ct-field">
            <label>Telepon</label>
            <input type="text" name="phone" placeholder="Nomor telepon Anda">
          </div>

          <div class="ct-field ct-field--full">
            <label>Isi Pesan*</label>
            <textarea name="message" rows="5" placeholder="Isi pesan Anda …"></textarea>
          </div>
        </div>

        <div class="ct-actions">
          <div class="g-recaptcha"
               data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY', 'YOUR_SITE_KEY_HERE') }}">
          </div>

          <button type="submit" class="ct-btn">KIRIM PESAN</button>
        </div>
      </form>

    </div>
  </section>

  {{-- ===== Lokasi Kami ===== --}}
  <section class="ct-locations">
    <div class="ct-container">
      <h2 class="ct-loc-title">LOKASI KAMI</h2>

      <div class="ct-office">
        <h3>KANTOR PUSAT</h3>
        <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone : (+62 21) 398 38706 • Fax : (+62 21) 316 1701</p>
        <p>Hotline : +6281519040071 / +62811998167</p>
      </div>

      <div class="ct-office">
        <h3>KANTOR CABANG</h3>
        <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone : (+62 21) 398 38706 • Fax : (+62 21) 316 1701</p>
        <p>Hotline : +6281519040071 / +62811998167</p>
      </div>
    </div>
  </section>

</main>

{{-- Script reCAPTCHA v2 checkbox --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@section('body_class', 'contact-page')
@endsection
