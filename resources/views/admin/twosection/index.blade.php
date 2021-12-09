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
                    <h3 class="box-title">Article</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('twosection.create')}}" class="btn btn-success">Created</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>

                            <th>title</th>
                            <th>content</th>
                            <th>list</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($twosections as $twosection)
                            <tr>

                                <td>{{$twosection->title}}</td>
                                <td>{{$twosection->content}}</td>
                                <td>{{$twosection->list}}</td>
                                <td>
                                    <img src="{{$twosection->getImage()}}" alt="" class="img-responsive" width="150">
                                </td>
                                <td><a href="{{route('twosection.edit', $twosection->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['twosection.destroy', $twosection->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('are you sure?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                    {{Form::close()}}
                                </td>
                                <td>
                                @if($twosection->status == 1)
                                    <a href=" /admin/twosections/{{$twosection->id}}" class="fa fa-lock"></a>
                                @else
                                    <a href="/admin/twosections/{{$twosection->id}}" class="fa fa-thumbs-o-up"></a>
                                @endif
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
