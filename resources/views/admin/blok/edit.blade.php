@extends('admin.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Change
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=>	['blok.update', $blok->id],
		'method'	=>	'put',
		'files'	=>	true
	])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="" value="{{$blok->title}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">text</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="text" placeholder="" value="{{$blok->text}}">
            </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">status</label>
                  <input type="checkbox" name="status" data-plugin="switchery" data-color="#1bb99a" {{ $blok->status ? 'checked' : ''}} >
              </div>

              <div class="form-group">
                  <img src="{{$blok->getImage()}}" alt="" width="200" class="img-responsive">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" name="image" id="exampleInputFile">

                  <p class="help-block">Other</p>
              </div>

        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
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
