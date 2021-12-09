@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create events
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		{{Form::open(['route'	=>	'events.store', 'files'	=>	true])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">event_category</label>
                  <input type="text" name="event_category" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('event_category')}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">event_title</label>
                  <input type="text" name="event_title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('event_title')}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">event_description</label>
                  <input type="text" name="event_description" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('event_description')}}">
              </div>
              <div class="form-group">
                  <label>Дата:</label>

                  <div class="input-group date">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right"  name="date" value="{{old('date')}}">
                  </div>
                  <!-- /.input group -->
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
