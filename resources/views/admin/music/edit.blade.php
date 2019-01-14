@extends('admin.master')

@section('title','Edit song info')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit song info</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit song info
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                 <form action="{{ route('musics.update', $music->id) }}" method="POST">

                      {{ csrf_field() }}
                      {{ method_field('PATCH') }}

                      <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="username" value="{{ $music->name }}">
                      </div>

                      <div class="form-group">
                        <label for="artist">Artist:</label>
                        <input type="artist" class="form-control" id="artist" name="artist" value = "{{ $music->artist_id }}">
                      </div>

                      <div class="form-group">
                        <label for="album">Album:</label>
                        <input type="album" name="album_id" class="form-control" id="album_id" value="{{ $music->album_id }}">
                      </div>

                      <div class="form-group">
                        <label for="lyrics">Lyrics:</label>
                        <input type="lyrics" name="lyrics" class="form-control" id="lyrics" value="{{ $music->lyrics }}">
                      </div>

                      <div class="form-group">
                        <label for="type">File type:</label>
                        <select name="type" class="form-control">
                            <option value="mp3">mp3</option>
                            <option value="mp4">mp4</option>
                        </select> 
                      </div>

                      <button type="submit" class="btn btn-default"><i class="fa fa-edit"></i>Edit</button>
                </form> 
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.container-fluid -->
@endsection

@section('footer')

@endsection
