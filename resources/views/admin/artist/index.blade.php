@extends('admin.master')
@section('title','Artist')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Artist list</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <a class="btn btn-default" href ="{{ route('artists.create') }}"><i class="fa fa-edit"></i>Create a new profile</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="artist-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Birthday</th>
                            <th width="400px">Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artists as $artist)
                        <tr class="odd gradeX">
                            <td>{{ $artist->id }}</td>
                            <td>{{ $artist->artist_name }}</td>
                            <td>{{ $artist->birthday }}</td>
                            <td>{{ $artist->description }}</td>
                            <td> <img class="artist-image" src="{{ $artist->image }}"></td>
                            <td class="center">
                                <a href="{{ route('artists.show', $artist->id) }}" class="btn btn-warning">More info</a>
                                <a href="{{ route('artists.edit', $artist->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                <!-- <a href="" class="btn btn-danger"><i class="fa fa-remove"></i> Delete</a> -->
                                <form style="display:inline-block;" method="POST" action="{{ route('artists.destroy', $artist->id) }}" >
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this profile?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $artists->links() }}
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
img { 
    width: 200px;
    height: 150px;
}
</style>
@endsection

