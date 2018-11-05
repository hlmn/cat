@extends('layouts.adminlayout')


@section('content')
  <div class="row">
    <div class="col-md-12">

      {!! Breadcrumbs::render('update.paket', $paket) !!}
      
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
          <h3 class="box-title">Update Layanan</h3>
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
          <form action="{{route('admin.paket.update', ['paket' => $paket->id])}}" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input class="form-control"  value="{{$paket->name}}" name="name" type="text">
                </div>
              {{-- <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input class="form-control"  name="foto" type="file">
              </div> --}}
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <textarea name="deskripsi">{!!html_entity_decode($paket->desc)!!}</textarea>
                </div>
              </div>
            </div>
                {{csrf_field()}}
          
          
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Save changes</button></form>
        </div>

    </div>
    </div>
    
  </div>
    
@endsection
 
@section('js')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=f3sg1vumz2lxhu0dnsl5siku8l31huewo0t2lgn6rkrjab8k"></script>
<script>
  tinymce.init({
    selector: 'textarea',
    height: 500,
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
    ],
    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
    image_advtab: true,
    templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'
    ],
    setup: function (editor) {
    editor.addButton('ea', {
      text: 'My button',
      icon: false,
      onclick: function () {
        editor.insertContent('&nbsp;<b>It\'s my button!</b>&nbsp;');
      }
    });
  }
   });
</script>
<script>
$( "#sent" ).submit(function( event ) {
  // swal("Loading","done","success");
  swal('Uploading CSV')
  swal.showLoading()
});
</script>

@endsection


