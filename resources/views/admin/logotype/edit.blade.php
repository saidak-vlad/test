@extends('admin.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Change logotype
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=>	['logotype.update', $logotype->id],
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
              <label for="exampleInputEmail1">copyright</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="copyright" placeholder="" value="{{$logotype->copyright}}">
            </div>
            <div class="form-group">
              <img src="{{$logotype->getImages()}}" alt="" width="200" class="img-responsive">
              <label for="exampleInputFile">logotype</label>
              <input type="file" name="imagelogotype" id="exampleInputFile">

              <p class="help-block">Other</p>
            </div>
              <div class="form-group">
                  <img src="{{$logotype->getImage()}}" alt="" width="200" class="img-responsive">
                  <label for="exampleInputFile">logos</label>
                  <input type="file" name="imagelogos" id="exampleInputFile">

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
