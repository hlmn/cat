@extends('layouts/new')
@section('content')
{{-- <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
          <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
            <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
        </div>
      </div>
      <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
  </section> --}}
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        {{-- <h1 class="mx-auto my-0 text-uppercase">Grayscale</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2> --}}
        <button style="background: transparent;border: 2px solid white"><a href="#projects" class="btn text-white js-scroll-trigger">Find Out More <i class="fas fa-angle-down"></i></A></button>
      </div>
    </div>
  </header>
  <!-- Projects Section -->
  <section id="projects" class="projects-section">
    <h1><center>Layanan</center></h1>
    <div class="container">

      <!-- Featured Project Row -->
      {{-- <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/wed.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Paket Pernikahan</h4>
            <ul>
                <li class="text-black-50 mb-0"><a href="#wed_eko" data-toggle="modal">Type Ekonomis</a></li>
                <li class="text-black-50 mb-0"><a href="#wed_hemat" data-toggle="modal">Type Hemat</a></li>
                <li class="text-black-50 mb-0"><a href="#wed_super" data-toggle="modal">Type Super</a></li>
                <li class="text-black-50 mb-0"><a href="#wed_deluxe" data-toggle="modal">Type Deluxe</a></li>
                <li class="text-black-50 mb-0"><a href="#wed_silver" data-toggle="modal">Type Silver</a></li>
                <li class="text-black-50 mb-0"><a href="#wed_gold" data-toggle="modal">Type Gold</a></li>
            </ul>
          </div>
        </div>
      </div> --}}

      <div class="modal fade" id="wed_eko" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                {{-- <div class="modal-header">
                  <h5 id="exampleModalLabel" style="font-style: italic;text-align: center;color: #15345a"><b>Type Ekonomis</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> --}}
                <div class="modal-body">
                      <h5 style="font-style: italic;text-align: center;color: #15345a"><b>Type Ekonomis</b></h5><hr>
                        <div title="Page 5">
                        <div>
                        <div>
                        <ol style="list-style-type: decimal;">
                        <li>
                        <p>Gedung dan fasilitasnya</p>
                        </li>
                        <li>
                        <p>Buffet Utama 800 porsi Type Super</p>
                        </li>
                        <li>
                        <p>Makanan Gubug / Pondokan :</p>
                        <p>a. Kambing Guling 2 ekor<br />b. Siomay 200 porsi<br />c. Soto Betawi + Lontong 200 porsi d. Empek - empek 200 porsi<br />e. Bakwan Malang 200 porsi<br />f. SateAyam200porsi<br />g. Es Sarang Burung 2 termos</p>
                        </li>
                        <li>
                        <p>Dekorasi Catering :<br />a. Dekorasi Buffet &amp; Meja Dessert meliputi :</p>
                        <p>* 1 Gentongan bunga untuk Buffet I<br />* 1 Buffet Tirai 6 titik bunga untuk Buffet II * Ice carving 2 Huruf + Ice Trey<br />* Acrilick untuk Dessert</p>
                        <p>b. Standing Flower 2 pasang<br />c. Stock Alang - alang 2 pasang<br />d. Janur atau umbul - umbul jalan 1 pasang e. Janur Plengkung untuk pintu 1 pasang<br />f. Gazebo jalan + bunga segar<br />g. 4 Vas bunga untuk penerima tamu<br />h. 1 gentongan bunga untuk Buffet keluarga i. BackgroundPenerimaTamu</p>
                        </li>
                        <li>
                        <p>Pelaminan :<br />a. Pelaminan ( Jawa / Sunda / Modifikasi ) 1 Set b. Bunga Segar pelaminan<br />c. Taman depan Pelaminan<br />d. Panggung + Karpet jalan<br />e. Palm background pelaminan</p>
                        </li>
                        <li>
                        <p>Rias, Busana &amp; Aksesoris<br />a.Rias PengantinuntukAkadNikahdiGedung</p>
                        <p>( Busana Sendiri )<br />b. 1 Pasang Pengantin untuk Resepsi di Gedung c. 2 Pasang Pendamping atau Orang Tua</p>
                        <p>( Ibu Baju Sendiri )<br />d. 4 Orang Penerima tamu<br />e. 6 Pasang Pagar Ayu + Pagar Bagus</p>
                        </li>
                        <li>
                        <p>Photo + Video Shooting ( di Gedung ) 2 x Acara : a. Photo Studio Digital</p>
                        <p>b. 1 Album @ 15 sheet ( Exclusive Colase ) c. Transfer DVD 1 keping + master<br />d. Layar mini studio</p>
                        </li>
                        <li>
                        <p>Perlengkapan :<br />a. 4 Buku penerima tamu + 4 spidol<br />b. 2 Meja penerima tamu<br />c. 2 Tempat ampau + 2 tempat souvenir</p>
                        <p>( dipinjamkan )</p>
                        </li>
                        <li>
                        <p>MC ( Master of Ceremony ) di gedung 1 x acara</p>
                        </li>
                        </ol>
                        </div>
                        </div>
                        </div>
                </div>
               {{--  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
              </div>
            </div>
          </div>

          <div class="modal fade" id="wed_hemat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        {{-- {{htmlspecialchars_decode()}} --}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

      <!-- Project One Row -->
      @foreach($layanan as $key => $layanan)
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="{{url($layanan->path)}}" alt="">
        </div>
        <div class="col-lg-6 {{$key % 2 ? 'order-lg-first' : ''}}">
          <div class="bg-white text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-black text-uppercase" style="text-align: center;" >{{$layanan->name}}</h4>
                <ul>
                  @foreach($layanan->paket as $paket)
                  <li class="text-white-50 mb-0" ><a href="#modal{{$paket->id}}" data-toggle="modal">{{$paket->name}}</a></li>

                  <div class="modal fade" id="modal{{$paket->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$paket->name}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            {!!htmlspecialchars_decode($paket->desc)!!}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                
            </ul>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
  @endforeach
      <!-- Project Two Row -->
      {{-- <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" style="width: 700px;height: 400px" src="img/stall.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-white text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-black text-uppercase" style="text-align: center;" >Gubuk/Stall</h4>
                <ul>
                <li class="text-white-50 mb-100" ><a href="#wed_eko" data-toggle="modal">Type Ekonomis</a></li>
                <li class="text-white-50 mb-0" ><a href="#wed_hemat" data-toggle="modal">Type Hemat</a></li>
                <li class="text-white-50 mb-0" ><a href="#wed_super" data-toggle="modal">Type Super</a></li>
                <li class="text-white-50 mb-0" ><a href="#wed_deluxe" data-toggle="modal">Type Deluxe</a></li>
            </ul>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <!-- Project One Row -->
      

    </div>
  </section>

  @endsection