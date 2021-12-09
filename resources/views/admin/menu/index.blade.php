@extends('admin.layout')
@section('content')
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
                    <h3 class="box-title">Menu</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('menu.create')}}" class="btn btn-success">Add</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>

                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{$menu->id}}</td>
                                <td>{{$menu->title}}</td>


                                <td>
                                    <a href="{{route('menu.edit',$menu->id)}}" class="fa fa-pencil"></a>
                                    <a href="">
                                    {{Form::open(['route'=>['menu.destroy', $menu->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('are you sure?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                    {{Form::close()}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach


                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
