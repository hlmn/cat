@extends('layouts/new')

@section('gaya')
<style type="text/css">
	#mainNav{
		background-color: rgba(0, 0, 0, 0.5)
	}
	.img-responsive {
    background: url(yourUrl);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}
</style>
@endsection

@section('content')
<section class="projects-section">
<div class="container">

      <h1 class="my-4 text-center text-lg-left">Thumbnail Gallery</h1>

      <div class="row text-center text-lg-left">

        {{-- <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
          	<div class="limit">
	            <img class="img-fluid img-thumbnail" src="{{url('img/1.jpg')}}" style="height: 20vh; width: 100%; object-fit: cover;" alt="">
	        </div>
          </a>
        </div> --}}
        @foreach($gallery as $key => $foto)
          <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" data-toggle="modal" data-target="#foto{{$foto->id}}" class="d-block mb-4 h-100">
              <div class="limit">
                <img class="img-fluid img-thumbnail" src="{{url($foto->path)}}" style="height: 20vh; width: 100%; object-fit: cover;" alt="">
            </div>
            </a>
          </div>
          <div class="modal fade" id="foto{{$foto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{url($foto->path)}}" style="width:100%">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
              </div>
            </div>
          </div>
        @endforeach
        
      </div>

    </div>
</section>
@endsection

@section('js')
@endsection