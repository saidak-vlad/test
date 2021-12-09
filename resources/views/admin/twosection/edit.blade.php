@extends('admin.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Change article
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=>	['twosection.update', $twosection->id],
		'method'	=>	'put',
		'files'	=>	true
	])}}
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
              <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="" value="{{$twosection->title}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">subtitle</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="content" placeholder="" value="{{$twosection->content}}">
            </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">list</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="list" placeholder="" value="{{$twosection->list}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">status</label>
                  <input type="checkbox" name="status" data-plugin="switchery" data-color="#1bb99a" {{ $twosection->status ? 'checked' : ''}} >
              </div>

            <div class="form-group">
              <img src="{{$twosection->getImage()}}" alt="" width="200" class="img-responsive">
              <label for="exampleInputFile">Image</label>
              <input type="file" name="image" id="exampleInputFile">

              <p class="help-block">Other</p>
            </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-default">Back</button>
          <button class="btn btn-warning pull-right">Change</button>
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
