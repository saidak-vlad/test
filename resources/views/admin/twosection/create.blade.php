@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Created article
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		{{Form::open(['route'	=>	'twosection.store', 'files'	=>	true])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Add article</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('title')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">content</label>
              <input type="text" name="content" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('content')}}">
            </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">list</label>
                  <input type="text" name="list" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('list')}}">
              </div>
            <div class="form-group">
              <label for="exampleInputFile">Image</label>
              <input type="file" name="image" id="exampleInputFile">

              <p class="help-block">Other</p>
            </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-default">Back</button>
          <button class="btn btn-success pull-right">Add</button>
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
