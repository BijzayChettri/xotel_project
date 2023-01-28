@extends('layouts.app-master')
@section('content')
@include('layouts.partials.sidebar')
@include('layouts.partials.navbar')
<div class="wrapper">
    <div class="content-wrapper my-0 ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Property Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Property Edit</li>
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
                                <!-- <button type="button" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#modal-lg">Add Amenity</button> -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <form method="post" action="{{ route('propertiesUpdate') }}" enctype="multipart/form-data">
                                        @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                             <input type="hidden" class="form-control" id="editname"  value="{{$propertyList[0]->id}}" name="id" placeholder="Enter name">
                                             <input type="text" required  class="form-control" id="name" value="{{$propertyList[0]['name']}}"  name="name" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Type</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                                            <option value="homestay" @selected($propertyList[0]['type'] == 'homestay')> Home Stay</option>
                                            <option value="hotel" @selected($propertyList[0]['type'] == 'hotel')>Hotel</option>
                                            <option value="resort" @selected($propertyList[0]['type'] == 'resort')>Resort</option>
                                            <option value="guest_house" @selected($propertyList[0]['type'] == 'guest_house')>Guest House</option>
                                            <option  value = "unique_stay" @selected($propertyList[0]['type'] == 'unique_stay')>Unique Stay</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Price</label>
                                            <input type="number" class="form-control" value="{{$propertyList[0]['price']}}"  required id="price" placeholder="Price" name="price">
                                        </div>
                                        
                                        <div class="form-group">
                                                <label class="form-label" for="inputEmail">Select Image:</label>
                                                <input type="file" name="file[]" multiple='multiple'  accept="image/*"  class="form-control"/>
                                                
                                        </div>
                                        <div class="form-group">
                                           @isset($propertyList[0]['images'])
                                                @foreach($propertyList[0]->images as $key=>$value)
                                                <input type="hidden" name="fileNames[]" value="{{$value->url}}" required class="form-control"/>
                                                 <img src="{{ asset('images/property/'.$propertyList[0]['id'].'/'.$value->url)}}" class="img-fluid img-thumbnail" width="180">
                                                @endforeach
                                           @endisset
                                        </div>
                                                   
                                        <div class="">
                                            <label for="exampleFormControlSelect1">Amenities</label>
                                            <select  class="form-control" id="choices-multiple-remove-button"  name="amenities[]" placeholder="Select Amenities" multiple>

                                                @isset($propertyList[0]['amenities']) 
                                                    @foreach($amenitiesData as $key=>$value)
                                                        <option value={{$value->name}} 
                                                        @foreach($propertyList[0]['amenities'] as $key=>$val)
                                                          @selected($value->name == $val->amenities)
                                                        @endforeach

                                                        >{{$value->name}}</option>
                                                    @endforeach
                                               @endisset
                                                </select> 
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Owner Name</label>
                                            <input type="text" class="form-control" value="{{$propertyList[0]['owner_name']}}"  required id="slug" placeholder="owner name" name="owner_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone</label>
                                            <input type="text" class="form-control" value="{{$propertyList[0]['phone']}}"  required id="slug" placeholder="Phone" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text" class="form-control" value="{{$propertyList[0]['email']}}"  required id="slug" placeholder="Email id" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <textarea  class="form-control" id="slug"  value="{{$propertyList[0]['address']}}" required placeholder="Address" name="address">{{$propertyList[0]['address']}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Latitude-Longitude</label>
                                            <input type="text" class="form-control" id="slug" value="{{$propertyList[0]['latlng']}}"  placeholder="Latitude-Longitude" name="latlng">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Pin Code</label>
                                            <input type="text" class="form-control" value="{{$propertyList[0]['pin']}}" required id="slug" placeholder="Pin Code" name="pin">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <textarea class="form-control" id="slug" value="{{$propertyList[0]['description']}}"  placeholder="Description" name="description">{{$propertyList[0]['description']}}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
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
        </section>
   </div>

    <!-- /.content-wrapper     


-->
<script>
         
    </script>
@endsection
   