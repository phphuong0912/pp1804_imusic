@extends('admin.master')
@section('title','Artist')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Artist info</h1>
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
                            <th>Birthday</th>
                            <th width="400px">Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>{{ $artist->artist_name }}</td>
                            <td>{{ $artist->birthday }}</td>
                            <td>{{ $artist->description }}</td>
                            <td>{{ $artist->image }}</td>
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
