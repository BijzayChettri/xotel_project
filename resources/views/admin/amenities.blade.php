@extends('layouts.app-master')

@section('content')
@include('layouts.partials.sidebar')
@include('layouts.partials.navbar')
<div class="wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{ asset('front/images/logos/logo21.png') }}" alt="XotelLogo" height="60"
            width="150">
    </div> -->
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper my-0 ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Amenities</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Amenities</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
            
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                            <div class="card-header">
                                <button type="button" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#modal-lg">Add Amenity</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Action(s)</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($list)
                                        @foreach($list as $key=>$value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->name}}</td>
                                                
                                                <td>{{$value->slug}}</td>
                                                
                                                <td><a href="" onclick="editAmenity({{$value}})" data-toggle="modal" data-target="#edit-modal-lg"><i class="fa fa-edit"></i> &nbsp;Edit</a>&nbsp;&nbsp;&nbsp
                                                <a href="{{URL::to('amenities-delete/'. $value->id)}}"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

             <!-- ------add modal ------------- -->

            <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Add Amenities</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form method="post" action="{{ route('amenitiesSave') }}">
                                @csrf
                             <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="name"  name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Slug</label>
                                    <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                                </div>
                             </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>


             <!-- ------edit modal ------------- -->
                <div class="modal fade" id="edit-modal-lg">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Edit Amenity</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form method="post" action="{{ route('amenitiesUpdate') }}">
                                @csrf
            
                             <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="hidden" class="form-control" id="editid"  value="" name="id" placeholder="Enter name">

                                    <input type="text" class="form-control" id="editname"  value="" name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Slug</label>
                                    <input type="text" class="form-control" id="editslug" value="" placeholder="Slug" name="slug">
                                </div>
                             </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
      <!-- /.modal -->
      <!-- /.modal -->

        </section>
        <!-- /.content -->
        
    </div>

<script>
   function editAmenity(val){
        $('#editname').val(val.name)
        $('#editslug').val(val.slug)
        $('#editid').val(val.id)
    }
</script>
    <!-- /.content-wrapper -->

    @endsection
    