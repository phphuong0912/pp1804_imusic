@extends('admin.master')

@section('title','Edit artist info')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit artist info</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit artist info
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                 <form action="{{ route('artists.update', $artist->id) }}" method="POST">

                      {{ csrf_field() }}
                      {{ method_field('PATCH') }}

                      <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="artist_name" value="{{ $artist->artist_name }}">
                      </div>

                      <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="birthday" class="form-control" id="birthday" name="birthday" value = "{{ $artist->birthday }}">
                      </div>

                      <div class="form-group">
                        <label for="album">Description:</label>
                        <input type="description" name="description" class="form-control" id="description" value="{{ $artist->description }}">
                      </div>

                      <div class="form-group">
                        <label for="text">Image:</label>
                        <input type="text" name="image" class="form-control" id="text" value="{{ $artist->image }}">
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
