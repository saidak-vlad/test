@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Create
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		{{Form::open(['route'	=>	'blok.store', 'files'	=>	true])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('title')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">text</label>
              <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('text')}}">
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
