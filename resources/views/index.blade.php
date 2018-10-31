@extends('layouts.user')

@section('style')
<style type="text/css">
    hr {
    margin-top: 25px;
    margin-bottom: 15px;
    border: 3px;
    border-top: 3px solid #0a0a0a;
    width: 7%;
}
body.modal-open #wrap{
    -webkit-filter: blur(7px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
}
  
.modal-backdrop {background: #f7f7f7;}

.close {
    font-size: 50px;
    display:block;
}

.modal-footer {
    padding: 15px;
    text-align: right;
    border-top: 0;
}
.modal-header {
    border-bottom: 0;
}
</style>
@endsection

@section('section')
<section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn nav" data-wow-duration="1s">
                                    {{-- <h1><b>Arif Catering</b></h1> --}}
                                    {{-- <p style="font-family: Lobster;font-size: 25px">"Make Your Day Special"</p> --}}
                                    <button class="btn-lg"><a style="color:white" href="#">FIND OUT MORE <i class="fa fa-angle-down"></i></a></button>
                                </div>
                            </div>	
                        </div>

                    </div>
                </div>
            </div>
        </section>

        

        <section id="ourPakeg" class="ourPakeg">
            <div class="container">
                <div class="main_pakeg_content">
                    <div class="row">
                        <div class="head_title text-center">
                            <h4 style="font-size: 40px;color:black">Our Menu</h4>
                            <hr>
                            <br>
                            <a href="{{url('menu.pdf')}}" class="btn-lg btn-primary" >Download</a>
                            {{-- <iframe src="{{url('menu.pdf')}}"></iframe> --}}
                        </div>
                        {{-- <iframe src="{{url('menu.pdf')}}" style="width: 100%;height: 150vh"></iframe> --}}
                        {{-- <div class="single_pakeg_one text-right wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Type Ekonomis</h4>
                                    </div>

                                    <ul>
                                        <li> Gedung dan fasilitas </li>
                                        <li> Buffet Utama 800 porsi Type Super </li>
                                        <li> Makanan Gubug / Pondokan :
                                            <li>Kambing guling 2 ekor</li>
                                            <li>Siomay 200 porsi</li>
                                         </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
 
                        <div class="single_pakeg_two text-left wow rotateInDownLeft">
                            <div class="col-md-6 col-sm-8">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Buffet Utama</h4>
                                    </div>

                                    <ul>
                                        <li><a href="#buffet_eko" data-toggle="modal">Type Ekonomis</a></li>
                                        <li>Type Hemat</li>
                                        <li>Type Super</li>
                                        <li>Type Deluxe</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal" tabindex="-1" role="dialog" id="buffet_eko">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                        <div class="single_pakeg_three text-left wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Paket Pernikahan</h4>
                                    </div>

                                    <ul>
                                            <li>Type Ekonomis</li>
                                            <li>Type Hemat</li>
                                            <li>Type Super</li>
                                            <li>Type Deluxe</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_pakeg_four text-left wow rotateInDownLeft">
                            <div class="col-md-6 col-sm-8">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Gubuk/Stall</h4>
                                    </div>

                                    <ul>
                                            <li>Type Ekonomis</li>
                                            <li>Type Hemat</li>
                                            <li>Type Super</li>
                                            <li>Type Deluxe</li>
                                        </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single_pakeg_five text-left wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Nasi Box</h4>
                                    </div>

                                    <ul>
                                            <li>Type Ekonomis</li>
                                            <li>Type Hemat</li>
                            
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_pakeg_six text-left wow rotateInDownLeft">
                            <div class="col-md-6 col-sm-8">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Coffee Break</h4>
                                    </div>

                                    <ul>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
@endsection