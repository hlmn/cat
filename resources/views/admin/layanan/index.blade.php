@extends('layouts.adminlayout')


@section('content')
  <div class="row">
    <div class="col-md-12">

      {!! Breadcrumbs::render('layanan') !!}
      
    </div>
    <div class="col-md-12">
      @if (session('danger'))
              <div class="alert alert-danger">
                  {{ session('danger') }}
              </div>
          @endif
    </div>
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List Kegiatan</h3>
          <div class="pull-right">
            {{-- <a href="{{route('admin.layanan.create')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Kegiatan</a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalFile"><span class="fa fa-plus"></span> Tambah layanan</button>
            
          </div>
        </div>
        <div class="box-body">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          @if (session('gagal'))
              <div class="alert alert-danger">
                  {{ session('gagal') }}
              </div>
          @endif
          @if (session('warning'))
        {{-- {{dd(session('warning'))}} --}}
              <div class="alert alert-warning" >
                  <ul>
                      @foreach (session('warning') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($layanan as $layan)
              <tr>
                <td>{{$layan->name}}</td>
                <td><a href="{{route('admin.layanan.update',['layanan' => $layan->id])}}" class="btn btn-primary">Detail</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer">
        </div>

    </div>
  </div>
    <div class="modal fade" id="myModalFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Tambahkan Foto Baru</h4>
            </div>
            <div class="modal-body">
              <form action="{{route('admin.layanan.create')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input class="form-control"   name="name" type="text">
                </div>
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
<script>
$( "#sent" ).submit(function( event ) {
  // swal("Loading","done","success");
  swal('Uploading CSV')
  swal.showLoading()
});
</script>

@endsection


