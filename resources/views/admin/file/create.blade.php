@extends('admin.master')
@section('content')
<html lang="en">
    <head>
        <title>File upload</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    </head>
    <body>
        <div class="container">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form method="post" action="{{ route('musics.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload your music here</h1>
                </div>
            </div>
        <form role="form">
            <div class="form-group">
                <label>Song</label>
                <input name="song" class="form-control">
            </div>
            <div class="form-group">
                <label>Artist</label>
                <select class="form-control" id="artist_id" name="artist_id">
                    @foreach($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->artist_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Album</label>
                <select class="form-control" id="album_id" name="album_id" >
                    <option value="null">N/A</option>
                    @foreach($albums as $album)
                    <option value="{{ $album->id }}">{{ $album->album_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Add lyrics here</label>
                <textarea name="lyrics" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>File input</label>
                <input type="file" name="filename" class="form-control">
            </div>
            <button type="submit" class="btn btn-default">Upload</button>
        </form>
        <script type="text/javascript">
            $(document).ready(function() {
              $(".btn-success").click(function(){ 
                  var html = $(".clone").html();
                  $(".increment").after(html);
              });
              $("body").on("click",".btn-danger",function(){ 
                  $(this).parents(".control-group").remove();
              });
            });
        </script>
        @endsection
