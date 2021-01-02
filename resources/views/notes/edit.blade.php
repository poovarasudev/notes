@extends('layouts.base')

@section('content')
  <div class="container">
<h1>Edit Note</h1>
      <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

<form action="{{route('notes.update',$note->id)}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="form-group">
    <label for="title">Note Title</label>
    <input class="form-control" type="text" name="title" value="{{$note->title}}">
    </div>

    <div class="form-group">
    <label for="body">Note Body</label>
    <textarea class="form-control" type="text" name="body" >{{$note->body}}</textarea>
    </div>

    {{-- <input type="hidden" name="notebook_id" value="{{$id}}"> --}}

    <input class="btn btn-primary" type="submit" value="Update">
</form>
</div>
  <script>
      CKEDITOR.replace( 'body' );
  </script>

@endsection