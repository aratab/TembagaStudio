@extends('layouts.app')

@section('content')

<!-- Home -->
<!-- Prosedur Pinjam -->
<div class="d-flex justify-content-center align-items-center" style="background-image: url('/img/Drum.png'); background-size: cover; align-items: center; padding: 13%">

    @if ($message = Session::get('info'))
      <div class="alert alert-secondary" role="alert">
        {{ $message }}
      </div>
    @endif
    @if ($message = Session::get('success'))
      <div class="alert alert-secondary" role="alert">
        {{ $message }}
      </div>
    @endif
    @if ($message = Session::get('error'))
      <div class="alert alert-secondary" role="alert">
        {{ $message }}
      </div>
    @endif
      <div class="col-lg-10 text order-2 order-lg-1 text-center">
        <h1 class = "fw-bold" style="font-family: 'Roboto'; font-size: 60pt; color: #C5AC58">Tembaga Studio</h1>
        <h5 style="font-weight: bold; font-size: 30pt; color: #FFFFFF">Music, Rental Sound System, & Recording</h5>
        <p class="text-center" style="color: #878787">Jl. Taman Candi Tembaga No.943, Kalipancur, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50183</p>
        <a class="btn btn-lg" style="margin-top:40px; padding-left:40px; padding-right:40px; background-color: #C5AC58; color: #FFFFFF; font-weight: bold;" href="#content2" role="button">Mulai</a>
      </div>
</div>

<div class="bg" style="background-color: #14171A">
  <div class="container" style="padding-top: 2.5%" id="content2">
    <div class="row d-flex">
      <div class="col-lg-6 text order-1 order-lg-1" style="align-content: flex-start">
        <h1 style="margin: 5% 0% 5% 0%; color: #C5AC58"><b>Tembaga Studio</b></h1>
        <p style="color: #FFFFFF">Anda sedang mencari studio musik untuk latihan band? Atau ingin menyewa 
          sound system dengan kualitas tinggi untuk suatu acara? Sudah menulis lagu, lalu ingin merekamnya 
          secara professional untuk dipublikasikan? Tembaga Studio adalah tempat yang tepat untuk mewujudkan 
          ketiganya. Kami melayani penyewaan studio, penyewaan sound system, dan jasa recording atau perekaman 
          musik.</p>
          <br/>
          <div style="height: 1px; background-color:#C5AC58"></div>
          <br/>
        <p style="margin: 0% 0% 10% 0%; color: #FFFFFF">Datang langsung ke studio kami di <b>Jalan Taman Candi Tembaga 
          No.943, Kalipancur, Kec. Ngaliyan, Kota Semarang</b>. Scroll ke bawah untuk memesan paket sewa studio atau
          <a href="https://api.whatsapp.com/send?phone=6285602577471" target="_blank" style="color: #C5AC58; text-decoration: none">hubungi kami</a>
          untuk penyewaan sound system dan layanan jasa recording. Cek juga instagram kami di 
          <a href="https://www.instagram.com/tembagamusic/" target="_blank" style="color: #C5AC58; text-decoration: none">@tembagamusic</a>
          dan
          <a href="https://www.instagram.com/tembagaaudio/" target="_blank" style="color: #C5AC58; text-decoration: none">@tembagaaudio</a>
          untuk informasi lebih lanjut.
        </p>
      </div>
      <div class="col-lg-6 order-2 d-flex justify-content-center align-items-center">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="450" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20TMN%20Candi%20Tembaga%20No.943,%20Kalipancur,%20Kec.%20Ngaliyan,%20Kota%20Semarang,%20Jawa%20Tengah%2050183&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>
              .mapouter{
                position:relative;
                text-align:right;
                padding: 10% 0;
              }
            </style>
            <a href="https://www.embedgooglemap.net">add google maps html</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background-image: url('/img/Studio2.jpg'); background-size: cover; align-self: center; padding: 7% 0 7% 0">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 text order-1 order-lg-1 text-center">
        <h1 class = "fw-bold" style="font-family: 'Roboto'; font-size: 45pt; color: #C5AC58;">Brands</h1>
        <h5 style="font-weight: bold; font-size: 20pt; color: #C4C4C4;">Alat Studio Band</h5>
        <img src="/img/Logo.png" style="width: 80%; margin: 30px">
        <br/>
        <a class="btn btn-lg" style="margin-top:40px; padding-left:40px; padding-right:40px; background-color: #C5AC58; color: #FFFFFF; font-weight: bold;" href="https://bit.ly/pdfTembaga" role="button">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>

<div style="background-color: #14171A">
  <div class="container" style="padding: 2.5% 0 2.5% 0">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-12 text order-1 order-lg-1 text-center">
        <h1 class = "fw-bold" style="font-family: 'Roboto'; font-size: 40pt; color: #C5AC58;">Paket</h1>
        <h5 style="font-weight: bold; font-size: 25pt; color: #C4C4C4;">Sewa Studio Musik</h5>
        <div class="row row-cols-auto justify-content-around">
          <style>
            ul {
              margin: 25px;
              list-style-type: '\2713';
              font-weight: 600;
            }
            li::marker {
              color: #C5AC58;
            }
          </style>
        
          <div class="card col" style="background-color: #1A2229; color: #C4C4C4; width: 320px; border-radius: 30px; margin: 20px"> 
            <div class="card-body" style="margin: 20px 0 20px 0;">
              <p class="fs-2" style="margin:0; color: white; font-weight: 500;">Pelajar</p>
              <p style="font-size:18pt; margin: 0; color:#C5AC58;">
                <b>Rp<span style="font-size:24pt">50.000</span></b>
              </p>
              <p>Per grup (maksimal 5 orang)<br>Tarif per jam</p>
              <form action="/sewa1" method="get">
                <input type="hidden" name="paket" value="1">
                <div class="d-grid gap-2">
                  <button type="submit" name="submit" class="btn" style="padding:3px 0 3px 0; background-color: #C5AC58; color: white; font-weight: bold; font-size: 18pt;">Sewa</button>
                </div>
              </form>
              <div class="text-start" >
                <ul class="list-group">
                  <li >Amply Gitar Marshall JCM 2000</li>
                  <li>Amply bass Fender Rumble 100 <br>dan Marshall Bass State 150</li>
                  <li>Boss GT 8 dan POD Line 6 XT Live</li>
                  <li>Ruangan AC</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card col" style="background-color: #1A2229; color: #C4C4C4; width: 320px; border-radius: 30px; margin: 20px"> 
            <div class="card-body" style="margin: 20px 0 20px 0;">
              <p class="fs-2" style="margin:0; color: white; font-weight: 500;">Reguler</p>
              <p style="font-size:18pt; margin: 0; color:#C5AC58;">
                <b>Rp<span style="font-size:24pt">80.000</span></b>
              </p>
              <p>Per grup (maksimal 5 orang)<br>Tarif per jam</p>
              <form action="/sewa1" method="get">
                <input type="hidden" name="paket" value="2">
                <div class="d-grid gap-2">
                  <button type="submit" name="submit" class="btn" style="padding:3px 0 3px 0; background-color: #C5AC58; color: white; font-weight: bold; font-size: 18pt;">Sewa</button>
                </div>
              </form> 
              <div class="text-start" >
                <ul class="list-group">
                  <li style="color: white;">Semua fasilitas Paket Pelajar</li>
                  <li>Set alat musik lebih lengkap</li>
                  <li>Akses ke ruangan rekaman</li>
                  <li>Audio Controller</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card col" style="background-color: #1A2229; color: #C4C4C4; width: 320px; border-radius: 30px; margin: 20px"> 
            <div class="card-body" style="margin: 20px 0 20px 0;">
              <p class="fs-2" style="margin:0; color: white; font-weight: 500;">Profesional</p>
              <p style="font-size:18pt; margin: 0; color:#C5AC58;">
                <b>Rp<span style="font-size:24pt">120.000</span></b>
              </p>
              <p>Per grup (maksimal 5 orang)<br>Tarif per jam</p>
              <form action="/sewa1" method="get">
                <input type="hidden" name="paket" value="3">
                <div class="d-grid gap-2">
                  <button type="submit" name="submit" class="btn" style="padding:3px 0 3px 0; background-color: #C5AC58; color: white; font-weight: bold; font-size: 18pt;">Sewa</button>
                </div>
              </form>
              <div class="text-start" >
                <ul class="list-group">
                  <li style="color: white;">Semua fasilitas Paket Reguler</li>
                  <li>Request Setting</li>
                  <li>Professional audio monitor</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div>
          <a href="/layanan/#sound-system" style="color: #C5AC58; font-weight: bold; text-decoration: none; font-size: 14pt; line-height: 3">Lihat Paket Sewa Sound System<br></a>
          <a href="/layanan/#jasa-recording" style="color: #C5AC58; font-weight: bold; text-decoration: none; font-size: 14pt; ">Lihat Paket Jasa Recording</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background-image: url('/img/Studio3.jpg'); background-size: cover; align-self: center; padding: 5% 0 5% 0">
  <div class="container">
    <div class="row d-flex">
      <div class="col-lg-12 text order-1 order-lg-1" style="align-content: flex-start;">
        <h1 class="fw-bold text-center" style="font-family: 'Roboto'; font-size: 50pt; color: #C5AC58;"><b>FAQs</b></h1>
        <h5 class="text-center" style="font-weight: bold; font-style: italic; font-size: 15pt; color: #C4C4C4;">Frequently Asked Question</h5>
        <div style="margin: 5% 5% 0 5%">
          <h4 style="margin: 20px% 0 20px 0; color: #C5AC58"><b>Perubahan & Pembatalan Tanggal </b></h4>
          <p style="color: #FFFFFF">Perubahan tanggal hanya bisa dilakukan 1 kali dengan konfirmasi terlebih dahulu kepada pihak studio, selambatnya 45 hari sebelum tanggal acara, 
            dan hanya jika jadwal yang diinginkan masih kosong.  Perubahan tanggal juga bisa dilakukan apabila terjadi keadaan darurat seperti bencana alam maupun kejadian di luar kendali manusia.
          </p>
          <br>
          <div style="height: 1px; background-color:#C5AC58"></div>
          <br>

          <h4 style="margin: 20px% 0 20px 0; color: #C5AC58"><b>Batasan Sewa </b></h4>
          <p style="color: #FFFFFF">Tarif sewa mencakup fasilitas standar tiap ruang.  Penggunaan fasilitas tambahan dikenakan biaya secara terpisah. Penggunaan ruang (berikut listrik, AC, 
            serta sistem tata cahaya dan suara) dalam kurun waktu H-1 dan H+1 dikenakan biaya tambahan.
          </p>
          <br>
          <div style="height: 1px; background-color:#C5AC58"></div>
          <br>

          <h5 style="color: #FFFFFF">Punya pertanyaan lain?
          <a href="https://api.whatsapp.com/send?phone=6285602577471" target="_blank" style="color: #C5AC58; font-weight: bold; text-decoration: none;">Hubungi kami</a>
          </h5>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection