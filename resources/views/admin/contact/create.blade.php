@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить пользователя
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		{{Form::open(['route'	=>	'contact.store', 'files'	=>	true])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем пользователя</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('title')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">subtitle</label>
              <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('subtitle')}}">
            </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('name')}}">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">number</label>
                  <input type="text" name="number" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('number')}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">email</label>
                  <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('email')}}">
              </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-success pull-right">Добавить</button>
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
