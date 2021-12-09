@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Change menu
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Change menu</h3>
                </div>
                <div class="box-body">
                    {{Form::open(['route'=>['menu.update',$menu->id], 'method'=>'put'])}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title"
                                   value="{{$menu->title}}">
                            <br>

                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Back</button>
                    <button class="btn btn-warning pull-right">Change</button>
                </div>
                <!-- /.box-footer-->
                {{Form::close()}}
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
