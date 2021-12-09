@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Created menu
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            {!! Form::open(['route' => 'menu.store']) !!}


            <div class="box-header with-border">
                <h3 class="box-title">Add menu</h3>
                @include('admin.errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title">

                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-default">Back</button>
                <button class="btn btn-success pull-right">Add</button>
            </div>
            <!-- /.box-footer-->
            {!! Form::close() !!}

        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
@endsection
