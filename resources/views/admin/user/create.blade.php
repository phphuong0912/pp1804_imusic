@extends('admin.layout.master')
@section('title','User')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create a new user</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of all users
            </div>
            @foreach ($errors->all() as $error)
            <p class = "alert alert-danger">{{$error}}</p>
            @endforeach
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form action="{{ route('users.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">{{ trans('message.name') }}</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">{{ trans('message.email') }}</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">{{ trans('message.password') }}</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password">{{ trans('message.confirm_password') }}</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                    </div>
                    <div class="form-group">
                        <label for="role">{{ trans('message.select_role') }}</label>
                        <select name="role" class="form-control" id="role">
                            <option value="1" selected="true">{{ trans('message.admin') }}</option>
                            <option value="2">{{ trans('message.editor') }}</option>
                            <option value="3">{{ trans('message.member') }}</option>
                        </select>
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
