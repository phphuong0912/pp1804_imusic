@extends('admin.master')
@section('title','User')
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
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="song-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>View count</th>
                            <th>Artist</th>
                            <th>Album</th>
                            <th>Lyrics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>{{ $music->name }}</td>
                            <td>{{ $music->view_count }}</td>
                            <td>{{ $music->artist_id }}</td>
                            <td>{{ $music->album_id }}</td>
                            <td>{{ $music->lyrics }}</td>
                            <td>{{ $music->type }}</td>
                        </tr>
                    </tbody>
                </table>
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
@endsection
