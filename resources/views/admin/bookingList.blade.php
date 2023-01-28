@extends('layouts.app-master')
@section('content')
@include('layouts.partials.sidebar')
@include('layouts.partials.navbar')

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script> -->
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
                        <h1>Booking List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Booking List</li>
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
                    
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>phone</th>
                                            <th>Property Name</th>
                                            <th>Property Address</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>Bookingstatus</th>
                                            <th>Action(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($bookings)
                                        @foreach($bookings as $key=>$value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td id="folder_name">{{$value->custName}}</td>
                                            <td>{{$value->custEmail}}</td>
                                            <td>{{$value->custPhone}}</td>
                                            <td>{{$value->propertyName}}</td>
                                            <td>{{$value->propertyAddress}}</td>
                                            <td>{{$value->propertyPrice}}</td>
                                            <td>{{date('d-m-Y', strtotime($value->created_at));}}</td>
                                            <td class="text-danger" style="text-transform: uppercase;">{{$value->Bookingstatus}}</td>
                                            <td>
                                               <button type="button" onclick="updateBooking({{$value->id}})" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#modal-lg">Update</button>
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
                            <h4 class="modal-title">Update Booking Lead</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ url('booking-update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="bookingId" id="booking_id" value="">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Change lead status</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                                        <option value="cancelled">Cancelled</option>
                                        <option value="pending">Pending</option>
                                        <option value="converted">Converted</option>
                                        <option value="new">New</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" >Remarks</label>
                                    <textarea class="form-control" name="remark" required></textarea>
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
            <!-- ------edit modal ------------- -->
            <!-- <div class="modal fade" id="edit-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Property</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('propertiesUpdate') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" required class="form-control" id="name" name="name" placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                                        <option value="homestay"> Home Stay</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="resort">Resort</option>
                                        <option value="guest_house">Guest House</option>
                                        <option value="unique_stay">Unique Stay</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="inputEmail">Select Image:</label>
                                    <input type="file" name="file[]" multiple='multiple' required class="form-control" />
                                </div>

                                <div class="">
                                    <label for="exampleFormControlSelect1">Amenities</label>
                                    <select class="form-control" id="choices-multiple-remove-button" name="amenities[]" placeholder="Select Amenities" multiple>
                                        @isset($amenities)
                                        @foreach($amenities as $key=>$value)
                                        <option value={{$value->name}}> {{$value->name}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Owner Name</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="owner name" name="owner_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Email id" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <textarea class="form-control" id="slug" required placeholder="Address" name="address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Latitude-Longitude</label>
                                    <input type="text" class="form-control" id="slug" placeholder="Latitude-Longitude" name="latlng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pin Code</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Pin Code" name="pin">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" id="slug" placeholder="Description" name="description"></textarea>
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
        </section>
        <!-- /.content -->

    </div>

    <script>
         function updateBooking(val) {
            $('#booking_id').val(val)
        }

    </script>

    <!-- /.content-wrapper -->

    @endsection