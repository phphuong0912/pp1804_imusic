@extends('admin.master')
@section('title','Music','style')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Song list</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
            <a class="btn btn-default upload-song" href ="{{ route('musics.create') }}"><i class="fa fa-edit"></i>Upload a new song</a>
            <form class="col-xs-8 form-search-music" action="{{ route('searchMusic')}}"  method="POST">
                {{ csrf_field() }}
                <div class="col-xs-8 col-xs-offset-4 input-group custom-search-form">
                    <input type="text" name="keyword" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                    </button>
                    </span>
                </div>
            </form>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="music-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Play</th>
                            <th>View count</th>
                            <th>Artist</th>
                            <th>Album</th>
                            <th width="300px">Lyrics</th>
                            <th>File type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($musics as $music)
                        <tr class="odd gradeX">
                            <td>{{ $music->id }}</td>
                            <td>{{ $music->name }}</td>
                            <td>
                                <audio controls>
                                    <source src="{{ asset($music->path) }}" autoplay="autoplay" preload ="auto" type="audio/mpeg">
                                </audio>
                            </td>
                            <td>{{ $music->view_count }}</td>
                            <td>{{ $music->artist_id }}</td>
                            <td>{{ $music->album_id }}</td>
                            <td>{{ $music->lyrics }}</td>
                            <td>{{ $music->type }}</td>
                            <td class="center">
                                <a href="{{ route('musics.show', $music->id) }}" class="btn btn-warning">Song info</a>
                                <a href="{{ route('musics.edit', $music->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                <!-- <a href="" class="btn btn-danger"><i class="fa fa-remove"></i> Delete</a> -->
                                <form style="display:inline-block;" method="POST" action="{{ route('musics.destroy', $music->id) }}" >
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this song?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $musics->links() }}
                <!-- /.table-responsive -->
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
<script>
    $(document).ready(function() {
        $('#user-table').DataTable({
            responsive: true
        });
    });
</script>
@endsection
@section('style')
<style>
.upload-song { 
    float: left;
}
.form-search-music {
    float: right;
}
</style>
@endsection