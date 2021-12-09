@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Logotype</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('logotype.create')}}" class="btn btn-success">Created logotype</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>copyright</th>
                            <th>logotype</th>
                            <th>logos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($logotypes as $logotype)
                            <tr>
                                <td>{{$logotype->copyright}}</td>
                                <td>
                                    <img src="{{$logotype->getImages()}}" alt="" class="img-responsive" width="150">
                                </td>
                                <td>
                                    <img src="{{$logotype->getImage()}}" alt="" class="img-responsive" width="150">
                                </td>
                                <td><a href="{{route('logotype.edit', $logotype->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['logotype.destroy', $logotype->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('are you sure?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach

                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
