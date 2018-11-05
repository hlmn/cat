@extends('layouts.adminlayout')

@section('gaya')
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			{!! Breadcrumbs::render('gallery') !!}
		</div>
        <div class="col-md-12">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
        </div>
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Foto</h3>
              <div class="pull-right">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalFile"><span class="fa fa-plus"></span> Tambah Foto</button>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalURL"><span class="fa fa-plus"></span> URL</button> --}}
                
              </div>
            </div>
            <div class="box-body">
              
              <div class="row">
                @foreach($galleries as $gallery)
                  <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" data-toggle="modal" data-target="#modal{{$gallery->id}}">
                        <img class="img-fluid img-thumbnail" src="{{url($gallery->path)}}" style="height: 20vh; width: 100%; object-fit: cover;" alt="">
                    </a>
                    <div class="modal fade" id="modal{{$gallery->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Detail</h4>
                          </div>
                          <div class="modal-body">
                            <img class="img-fluid img-thumbnail" src="{{url($gallery->path)}}" style="width: 100%" alt="">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="{{route('admin.galleries.destroy', ['gallery' => $gallery->id])}}" onclick="return confirm('a')" type="button" class="btn btn-danger">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                
              </div>
                @if($galleries->isEmpty())
                  <div class="col-md-12">
                    <p><center>Tidak ada foto</center></p>
                  </div>
                @endif
            </div>
            @if($galleries->isNotEmpty())
            <div class="box-footer">
              {{$galleries->links()}}
            </div>
            @endif
          </div>
         
        </div>
        
        <!-- /.box-footer-->
    </div>
    <div class="modal fade" id="myModalFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Tambahkan Foto Baru</h4>
            </div>
            <div class="modal-body">
              <form action="{{route('admin.galleries.create')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Foto</label>
                  <input class="form-control"  name="foto" type="file">
                </div>
                {{csrf_field()}}
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button></form>
            </div>
          </div>
        </div>
    </div>

@endsection

@section('js')
@endsection