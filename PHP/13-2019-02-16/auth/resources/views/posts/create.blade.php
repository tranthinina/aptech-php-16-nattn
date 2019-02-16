@extends('layouts.app')
@section('content')
<textarea name="editor" class="form-control " id="editor" cols="30" rows="10"></textarea>
@endsection -->
@push('scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/ckfinder/ckfinder.js') }}"></script>

<script> var editor = CKEDITOR.replace('editor'); </script>
<script>CKFinder.setupCKEditor(editor)</script>

@endpush
<!-- <!DOCTYPE html>
<html>

<body>
  <h1>Create Post View</h1>
  <form>
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>
  </form>
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
  <script>
    CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
  </script>
</body>

</html> -->