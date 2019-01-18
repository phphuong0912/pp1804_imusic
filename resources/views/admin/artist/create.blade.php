@extends('admin.master')

@section('title','Artist')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create an artist profile</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                New artist profile
            </div>
            @foreach ($errors->all() as $error)
              <p class = "alert alert-danger">{{$error}}</p>
            @endforeach
            <!-- /.panel-heading -->
            <div class="panel-body">
                 <form action="{{ route('artists.store') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="artist_name">
                      </div>

                      <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="content" name="content" class="form-control" id="birthday">
                      </div>

                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="content" name="content" class="form-control" id="description">
                      </div>

                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="image" name="content" class="form-control" id="image">
                      </div>

                      <button type="submit" class="btn btn-default"><i class="fa fa-edit"></i>Create</button>
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