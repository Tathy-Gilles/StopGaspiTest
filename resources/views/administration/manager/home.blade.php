@extends('layouts.manager')


@section('content')

  <div class='panel panel-primary'>
    <div class="panel-heading">
      <h3 class="panel-title">Images Du Serveur</h3>
    </div>
    <div class="panel-body">
      <form style='margin-bottom: 50px;' method='POST' action='/admin/uploader' enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <input type='file' name='file' />
        </div>
        <button class='btn btn-success' type='submit'>Upload</button>
      </form>
      @foreach($files as $file)
        <img onclick='returnFileUrl(this)' height='100' src='{{ Storage::url($file) }}' />
      @endforeach

    </div>
  </div>


@endsection

@section('scripts')
  <script>
      function getUrlParam( paramName ) {
        var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' );
        var match = window.location.search.match( reParam );

        return ( match && match.length > 1 ) ? match[1] : null;
    }
    function returnFileUrl(img) {

        var funcNum = getUrlParam( 'CKEditorFuncNum' );
        var fileUrl = $(img).attr('src');
        // console.log(fileUrl);
        window.opener.CKEDITOR.tools.callFunction( funcNum, fileUrl );
        window.close();
    }
  </script>
@endsection
