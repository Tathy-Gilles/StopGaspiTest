@extends('layouts.admin')


@section('content')

<div class='col-md-12' id="editor1" contenteditable="true">
  {!! $pages->content !!}
</div>

<form id='form' method='POST' action='/admin/page/edit/{{ $pages->id }}'>
  {{ csrf_field() }}
  <div class="form-group">
    <textarea id='textarea' name='content' style='visibility: hidden;'>test</textarea>
  </div>
  <button onclick='test()' class='btn btn-primary'>Editer la page</button>
</form>

@endsection

@section('scripts')

<script src="/ckeditor/ckeditor.js"></script>
<script>
  function test() {
    $('#form').submit(function() {
      html = $('#editor1').html();
      $('#textarea').html(html);
      return true;
    });
  }
  // Turn off automatic editor creation first.
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline( 'editor1', {
    filebrowserBrowseUrl: '/admin/browser',
    // filebrowserUploadUrl: '/admin/uploader'
  });
</script>

@endsection
