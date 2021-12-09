@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Created logotype
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        {{Form::open(['route'	=>	'logotype.store', 'files'	=>	true])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add logotype</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">copyright</label>
                            <input type="text" name=" copyright" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old(' copyright')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">logotype</label>
                            <input type="file" name="imagelogotype" id="exampleInputFile">

                            <p class="help-block">Other</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">logos</label>
                            <input type="file" name="imagelogos" id="exampleInputFile">

                            <p class="help-block">Other</p>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Back</button>
                    <button class="btn btn-success pull-right">Create</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
